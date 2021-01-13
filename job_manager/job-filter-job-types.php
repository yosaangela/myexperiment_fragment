<?php
/**
 * Filter in `[jobs]` shortcode for job types.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-filter-job-types.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     wp-job-manager
 * @category    Template
 * @version     1.31.1
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<?php if ( ! is_tax( 'job_listing_type' ) && empty( $job_types ) ) : ?>
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="job_types">
        <?php 
    $parent_terms = get_terms('job_listing_type', array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false)); 
    $i = 0;
        foreach ( $parent_terms as $type ) : ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading-<?php echo $i; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-<?php echo $i; ?>"><?php echo $type->name; ?> 
                    </button>
                    <span class="icon">+</span>
                </h2>

				<div id="flush-<?php echo $i; ?>" class="accordion-collapse collapse job_types_child" aria-labelledby="flush-heading-<?php echo $i; ?>" data-bs-parent="#accordionFlushExample">
                    <?php $child_terms = get_terms('job_listing_type', array('parent' => $type->term_id, 'orderby' => 'slug', 'hide_empty' => false));
                    foreach ( $child_terms as $term) : ?>
                        <p>
                            <label for="job_type_<?php echo esc_attr( $term->slug ); ?>" class="<?php echo esc_attr( sanitize_title( $term->name ) ); ?>">
                                <input type="checkbox" name="filter_job_type[]" value="<?php echo esc_attr( $term->slug ); ?>" <?php checked( in_array( $term->slug, $selected_job_types ), true ); ?> id="job_type_<?php echo esc_attr( $term->slug ); ?>" /> <?php echo esc_html( $term->name ); ?>
                            </label>
                        </p>
                    <?php endforeach ; ?>
				</div>

				<?php 
                $i++; ?>
			</div>
        <?php  endforeach; ?>
    </div>
  </div>
    <!-- <input type="hidden" name="filter_job_type[]" value="" />
    <?php elseif ( $job_types ) : ?>
        <?php foreach ( $job_types as $job_type ) : ?>
            <input type="hidden" name="filter_job_type[]" value="<?php echo esc_attr( sanitize_title( $job_type ) ); ?>" />
        <?php endforeach; ?>
    <?php endif; ?> -->



