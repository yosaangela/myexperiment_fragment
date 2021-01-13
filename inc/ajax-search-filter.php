<?php


add_action('wp_ajax_ajax_search_filter', 'ajax_search_filter_callback');
add_action('wp_ajax_nopriv_ajax_search_filter', 'ajax_search_filter_callback');

function ajax_search_filter_callback() {
    check_ajax_referer('filter_search_posts', 'security');
    global $wp_query;
    $paged = $_POST['page'];
    global $post;
    $args   = [
        'post_type'         => 'books_cpt',
        'post_status'       =>  'publish',
        'posts_per_page'    => -1,
    ];

    $all_posts = new WP_Query( $args );
    if($all_posts->have_posts()) : 
        while( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php echo wp_trim_words(get_the_content(), 40, '+++'); ?></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        <?php endwhile ; 
    endif ;
   wp_die();
}