<?php
/**
 * The main template file.
 *
 * @package wptest
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-8">
		<main id="main" class="site-main" role="main">

			<section id="service" style="margin-bottom:40px;">
				<div class="container">
					<div class="row">

					<?php $args = array (
								'post_type' => 'wpt_service',
								'posts_per_page' => 3,
								'category_name' => '',
								'orderby' => '',
								'order' => 'DESC',
						);
						$service_query = new WP_Query($args);
						
						if ( $service_query->have_posts() ) :
					?>
					
						<?php while ( $service_query->have_posts() ) : $service_query->the_post(); ?>
						<?php 
						$service_icon = get_post_meta($post->ID, 'wpt_service_icon', true);
						?>
					
						<div class="col-sm-4">
							<div class="service-item text-center">
								<i class="fa fa-<?php echo $service_icon; ?> fa-5x"></i>
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
						</div>
					
						<?php endwhile; ?>
					
					<?php endif; wp_reset_query(); ?>

					</div>
				</div>
			</section>

			<section id="service">
				<div class="container">
					<div class="row">
					<h2 class="text-center">Service By Taxomoy Query</h2>

					<?php $args = array (
								'post_type' => 'wpt_service',
								'posts_per_page' => 3,
								'service_category' => 'cat-1',
								'orderby' => '',
								'order' => 'DESC',
						);
						$service_query = new WP_Query($args);
						
						if ( $service_query->have_posts() ) :
					?>
					
						<?php while ( $service_query->have_posts() ) : $service_query->the_post(); ?>
						<?php 
						$service_icon = get_post_meta($post->ID, 'wpt_service_icon', true);
						?>
					
						<div class="col-sm-4">
							<div class="service-item text-center">
								<i class="fa fa-<?php echo $service_icon; ?> fa-5x"></i>
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
						</div>
					
						<?php endwhile; ?>
					
					<?php endif; wp_reset_query(); ?>

					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
