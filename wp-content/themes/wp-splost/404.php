
<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>


  <div id="maincontainer" class="fourOh">
        <img src="/wp-content/themes/wp-splost/404.png" width="250">
				<h2><?php _e( 'Oh, no! What page?', 'twentyten' ); ?></h2>
				<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
			  <div class="searcher">
       			<?php get_search_form(); ?>
       		</div>
</div>
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
<?php get_sidebar(); ?>

<?php get_footer(); ?>