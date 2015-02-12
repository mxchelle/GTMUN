<?php
 get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-8 clearfix" role="main">
					<?php
					$args=array(
					  'category_name' => single_cat_title( '', false ),
					  'post_type' => 'post',
					  'post_status' => 'publish',
					  'posts_per_page' => -1,
					  'caller_get_posts'=> 1
					);
					$my_query = null;


					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>


					  <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
							<div class="page-header">
								<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<?php echo "<b><time class='pull-right time' pubdate>".get_the_date()."</time></b>";?>
							</div>
							
							

						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_excerpt(); ?>
							
						</section> <!-- end article section -->
					
					
					</article> <!-- end article -->
					
					    <?php
				
					  endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
					?>
					
			
				</div> <!-- end #main -->
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>