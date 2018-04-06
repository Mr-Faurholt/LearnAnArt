<?php
/**
 * Template name: custom-checkboxfiltering
 *
 * @package llorix-one-lite
 */

	get_header();
?>

	</div>
	<!-- /END COLOR OVER IMAGE -->
</header>
<!-- /END HOME / HEADER  -->

<!--button and checkbox style-->
<style>
	.block {
		display: block;
		width: 100%;
		border: none;
		background-color: #CFCFCF;
		padding: 14px 28px;
		font-size: 16px;
		cursor: pointer;
		text-align: center;
		margin-bottom: 30px;
		color: #000000;
	}
	
	.results {
		list-style-type: none;
	}
</style>

<!--grid and content setup-->
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
				
				<!--filtering checkboxes-->
				<div class="col-md-12">
					<div class="tags">
						<div class="col-md-3">
							<h3> Categories </h3>
							<label>
								<input type="checkbox" rel="ceramics" />
								Ceramics
							</label>
							<label>
								<input type="checkbox" rel="paintings" />
								Paintings
							</label>
							<label>
								<input type="checkbox" rel="crafts" />
								Crafts
							</label>
						</div>
						
						<div class="col-md-3">
							<h3> Price </h3>
							<label>
								<input type="checkbox" rel="0-499kr" />
								0 - 499 kr
							</label>
							<label>
								<input type="checkbox" rel="500-1499kr" />
								500 - 1499 kr
							</label>
							<label>
								<input type="checkbox" rel="1500-1999kr" />
								1500 - 1999kr
							</label>
						</div>
						
						<div class="col-md-3">
							<h3> Location </h3>
							<label>
								<input type="checkbox" rel="stevns" />
								Rødvig Stevns
							</label>
							<label>
								<input type="checkbox" rel="heddinge" />
								Store Heddinge
							</label>
							<label>
								<input type="checkbox" rel="stege" />
								Stege
							</label>
							<label>
								<input type="checkbox" rel="askeby" />
								Askeby
							</label>
						</div>
						
						<div class="col-md-3">
							<h3> Language </h3>
							<label>
								<input type="checkbox" rel="danish" />
								Dansih
							</label>
							<label>
								<input type="checkbox" rel="english" />
								English
							</label>
							<label>
								<input type="checkbox" rel="german" />
								German
							</label>
						</div>
					</div>
				</div>
				
				
				<br><br>
				
				<!--filtering content results-->
				<div class="col-md-12">
					<ul class="results">
						<li class="ceramics stevns danish english 500-1499kr">
							<div class="col-xs-12 col-md-6">
						    	<a href="http://www.faurholtdesign.com/unique-ceramics/"><img src="http://www.faurholtdesign.com/wp-content/uploads/2018/03/Ceramics-image.png" width="100%" height="100%" alt="ceramics"/></a>
								<br>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36377.19185123093!2d12.324186123937396!3d55.26064384920972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652e1076a242831%3A0x279a10cc7495bea4!2s4673+R%C3%B8dvig+Stevns!5e0!3m2!1sda!2sdk!4v1521891907185" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
								
								<a href="http://www.faurholtdesign.com/unique-ceramics/"><button class="block"> Read more </button></a>
								
							</div>	
						</li>
						
						<li class="display-workshop paintings heddinge dansih 0-499kr">
							<div class="col-xs-12 col-md-6">
								<a href=" http://www.faurholtdesign.com/intuitive-painting/"><img src="http://www.faurholtdesign.com/wp-content/uploads/2018/03/IntuitivePainting.png" width="100%" height="100%" alt="paintings"/></a>
								<br>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d72661.80550994587!2d12.28761564800423!3d55.31118606498882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652e1618835b6bb%3A0x367426553cfabf49!2s4660+Store+Heddinge!5e0!3m2!1sda!2sdk!4v1521891822248" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
								
								<a href="http://www.faurholtdesign.com/intuitive-paintings/"><button class="block"> Read more </button></a>
								
							</div>	
						</li>
						
						<li class="display-workshop crafts stege german english 1500-1999kr">
							<div class="col-xs-12 col-md-6">
								<a href=" http://www.faurholtdesign.com/craft/"><img src="http://www.faurholtdesign.com/wp-content/uploads/2018/03/CreateGoldRings.png" width="100%" height="100%" alt="ceramics"/></a>
								<br>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d87133.08547394075!2d12.307723769334046!3d54.97863442178469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652d62155332bd3%3A0x29e83c7171ef84cf!2s4780+Stege!5e0!3m2!1sda!2sdk!4v1521891009033" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
								
								<a href="http://www.faurholtdesign.com/crafts/"><button class="block"> Read more </button></a>

							</div>	
						</li>
						
						<li class="display-workshop paintings askeby english 0-499kr">
							<div class="col-xs-12 col-md-6">
								<a href="http://www.faurholtdesign.com/memories-in-paintings/"><img src="http://www.faurholtdesign.com/wp-content/uploads/2018/03/MemoriesPaintings.png" width="100%" height="100%" alt="ceramics"/></a>
								<br>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36697.14104869959!2d12.133075171319032!3d54.91044605684212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652d4f9a3a3199b%3A0x62f917c8a6e13433!2s4792+Askeby!5e0!3m2!1sda!2sdk!4v1521891945117" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
								
								<a href="http://www.faurholtdesign.com/memories-in-paintings/"><button class="block"> Read more </button></a>
								
							</div>
						</li>	
					</ul>

			<?php
			endwhile; // end of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div>
</div><!-- .content-wrap -->

			<!--jQuery hide and show function-->
			<script> 
				jQuery(document).ready(function () {
				jQuery('.results > li').hide();

				jQuery('div.tags').find('input:checkbox').live('click', function () {
					jQuery('.results > li').hide();
					jQuery('div.tags').find('input:checked').each(function () {
						jQuery('.results > li.' + jQuery(this).attr('rel')).show();
						});
					});
				});
			</script>

<?php get_footer(); ?>
