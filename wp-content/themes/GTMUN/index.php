<?php get_header(); ?>
			
			<div id="content">
				<div id="main" class="col-md-8" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php 
						$front = false;
						foreach((get_the_category()) as $category) { 
						   if($category->cat_name=="Front Page"){
						   		$front = true;
						   }; 
						} 
						
						if($front) { ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
							
							<div class="page-header">
								<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<?php echo "<b><time class='time pull-right' pubdate>".get_the_date()."</time></b>";?>
							</div>


							
							

						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php the_content(); ?>
							
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php };
					endwhile; ?>	
					
					<div class="pull-right more-news"><a href="conference/archives/">More News</a></div>


					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>
						
					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    			<?php get_sidebar('sidebar2'); // sidebar 2 ?>
			</div> <!-- end #content -->
	</div> <!-- end #container -->
	
<?php get_sidebar('quote'); // sidebar 2 ?>

<div class="container blurb mylead">

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blurb') ) : ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>