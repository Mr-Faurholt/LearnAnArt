<?php
/**
 * Template name: custom-workshoppage-ceramics
 *
 * @package llorix-one-lite
 */

	get_header();
?>

	</div>
	<!-- /END COLOR OVER IMAGE -->
</header>
<!-- /END HOME / HEADER  -->

<style>

</style>

<div class="content-wrap">
	<div class="container">
		<div id="primary" class="content-area col-md-12">
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
the_post();
?>
				
				<?php get_template_part( 'content', 'page-no-title' ); ?>
				
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;
				?>
				<!--booking buttons-->
				<div class="col-md-12">
					<div class="col-xs-12 col-md-4">
						<h4> 12.02.18 </h4>
						<button onclick="myFunction()">Book it</button>
					</div>
					<div class="col-xs-12 col-md-4">
						<h4> 13.02.18 </h4>
						<button onclick="myFunction()">Book it</button>
					</div>
						
					<div class="col-xs-12 col-md-4">
						<h4> 14.02.18 </h4>
						<button onclick="myFunction()">Book it</button>
					</div>
				</div>

			<?php
			endwhile; // end of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div>
</div><!-- .content-wrap -->
	<!--JS alert function-->
	<script>
		function myFunction() {
			alert("You have now booked your workshop, thank you and enjoy");
		}
	</script>

<?php get_footer(); ?>
