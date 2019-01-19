<?php
/**
 * Notice when no jobs were found in `[jobs]` shortcode.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-no-jobs-found.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.0.0
 * @version     1.31.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php if ( defined( 'DOING_AJAX' ) ) : ?>
	<li class="no_job_listings_found"><?php esc_html_e( "Il n'y a pas d'annonce en lien avec votre cherche actuellement", 'wp-job-manager' ); ?></li>
<?php else : ?>
	<p class="no_job_listings_found"><?php esc_html_e( "0 résultats", 'wp-job-manager' ); ?></p>
<?php endif; ?>
