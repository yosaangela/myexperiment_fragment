<h1>Hello World</h1>
<?php 
global $post;
$args   = [
    'post_type'         => 'books_cpt',
    'post_status'       =>  'publish',
    'posts_per_page'    => -1,
];

$all_post   = new WP_Query($args);

$taxonomy   = 'books_cpt';

$parent_terms = get_terms('category', array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false)); ?>

    <?php 
    // echo '<pre>';
    // var_dump($parent_terms);
    // echo '</pre>';
    foreach($parent_terms as $parent) {
        echo '<div class="btn-group">';
            echo 
            '<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . 
                $parent->slug  .'
            </button>'; 

            echo '<div class="dropdown-menu">'; 
                $child_terms = get_terms('category', array('parent' => $parent->term_id, 'orderby' => 'slug', 'hide_empty' => false));
                foreach($child_terms as $child) {
                    echo '<a class="dropdown-item" href="#">' . $child->slug . '</a>';
                }
            echo '</div>';
        
        echo '</div>';
    }
    ?>

<div class="card-group">
<?php if($all_post->have_posts()) {
    while( $all_post->have_posts() ) : $all_post->the_post(); ?>

        
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php echo wp_trim_words(get_the_content(), 40, '+++'); ?></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        
    <?php endwhile ; 
}
?> </div>
