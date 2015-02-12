<?php
/*
Template Name: Registration Form
*/
 get_header(); 

 ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-8 clearfix" role="main">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->

					
					<?php endwhile; ?>	
					
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
    
				<?php get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

	<script>
		 
	//$(document).ready(function() {
	(function($) {
		var directory = <?php echo "'".get_stylesheet_directory_uri()."'"; ?>+'/library/countriesDropdown/countriesProcess.php';
		var index=0;
		$(".advisor").hide();

		$("#advisorButton").click(
			function(){
				$("#advisor-"+index).show();
				index++;

				if(index>2){
					$("#advisorButton").hide();
				}
			}
		);

	    $.ajax({
	       type: 'GET',
	       url: directory,
	       data: null,
	       success: function(text) {

	           var fields = text.split(/\n/);
	           fields.pop(fields.length-1);
	           
	         
	           var html = '<option value=""> -- </option>';
	           for(var i = 0; i < fields.length; i += 1) {
	           
	              html += '<option value="'+fields[i]+'">' + fields[i] + '</option>';
	              if (i==0){
	              	
	              }
	           }

	           $(html).appendTo('.countriesList');
	 
		    }
		});
		})(jQuery);
	//});

	</script>

<?php get_footer(); ?>