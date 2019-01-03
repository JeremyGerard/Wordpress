<?php
/**
 * Job Filters Flat
 *
 * @package Jobify
 * @since 3.0.0
 * @version 3.8.0
 */
?>
<?php
$atts = apply_filters( 'job_manager_ouput_jobs_default', array(
	'per_page' => get_option( 'job_manager_per_page' ),
	'orderby' => 'featured',
	'order' => 'DESC',
	'show_categories' => true,
	'categories' => true,
	'selected_category' => false,
	'job_types' => false,
	'location' => false,
	'keywords' => false,
	'selected_job_types' => false,
	'show_category_multiselect' => false,
	'selected_region' => false,
) );

global $is_flat;
?>

<?php do_action( 'job_manager_job_filters_before', $atts ); ?>

<form class="job_filters">
    <?php do_action( 'job_manager_job_filters_start', $atts ); ?>

    <div class="search_jobs">
        <!--
		<?php do_action( 'job_manager_job_filters_search_jobs_start', $atts ); ?>

		<div class="search_keywords">
			<label for="search_keywords"><?php esc_html_e( 'Keywords', 'wp-job-manager' ); ?></label>
			<input type="text" name="search_keywords" id="search_keywords" placeholder="<?php esc_attr_e( 'Keywords', 'wp-job-manager' ); ?>" value="<?php echo esc_attr( $keywords ); ?>" />
		</div>

		<div class="search_location">
			<label for="search_location"><?php esc_html_e( 'Location', 'wp-job-manager' ); ?></label>
			<input type="text" name="search_location" id="search_location" placeholder="<?php esc_attr_e( 'Location', 'wp-job-manager' ); ?>" value="<?php echo esc_attr( $location ); ?>" />
		</div>-->

        <?php if ( $categories ) : ?>
            <?php foreach ( $categories as $category ) : ?>
                <input type="hidden" name="search_categories[]" value="<?php echo esc_attr( sanitize_title( $category ) ); ?>" />
            <?php endforeach; ?>
        <?php elseif ( $show_categories && ! is_tax( 'job_listing_category' ) && get_terms( array( 'taxonomy' => 'job_listing_category' ) ) ) : ?>
            <div class="search_categories">
                <label for="search_categories"><?php esc_html_e( 'Category', 'wp-job-manager' ); ?></label>
                <?php if ( $show_category_multiselect ) : ?>
                    <?php job_manager_dropdown_categories( array( 'taxonomy' => 'job_listing_category', 'hierarchical' => 1, 'name' => 'search_categories', 'orderby' => 'name', 'selected' => $selected_category, 'hide_empty' => true ) ); ?>
                <?php else : ?>
                    <?php job_manager_dropdown_categories( array( 'taxonomy' => 'job_listing_category', 'hierarchical' => 1, 'show_option_all' => __( 'Any category', 'wp-job-manager' ), 'name' => 'search_categories', 'orderby' => 'name', 'selected' => $selected_category, 'multiple' => false, 'hide_empty' => true ) ); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php do_action( 'job_manager_job_filters_search_jobs_end', $atts ); ?>
    </div>

    <?php do_action( 'job_manager_job_filters_end', $atts ); ?>
</form>

<?php do_action( 'job_manager_job_filters_after', $atts ); ?>
