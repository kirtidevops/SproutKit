<?php
/*
Template Name: Articles
*/
?>

<?php get_header(); ?>

<section class="hero">
		<div class="row">
			<div class="small-12 columns">
				<h2>Never Stop Learning</h2>
				<h3 class="subheader">Once You Stop, You Die</h3>
			</div>
		</div>
</section>
<section class="article">
	<div class="row">
			<?php 
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'orderby' => 'date', 'order' => 'DESC')); ?>

			<?php if ( $wpb_all_query->have_posts() ) : ?>


			<?php
			while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
			  	$pinterest = get_field('pinterest_description', $cat_post->ID);
			    //$out .= '<li>';
			    //$out .=  '<a href="'.get_permalink($cat_post->ID).'" title="'.wptexturize($cat_post->post_title).'"><img data-pin-nopin="true" title="'.$cat_post->post_title.'" alt="'.$cat_post->post_title.'" src="'.$pinterest.'"></a></li>';
			    $out = '<div class="small-6 large-3 columns end"><div class="article-box"><div class=""><img src="https://s3-us-west-2.amazonaws.com/sproutkit-master/wp-content/uploads/2016/10/10034336/favicon.png" data-pin-nopin="true"></div><h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h3><p>'.$pinterest.'</p></div></div>';
			    echo $out;
			endwhile;
			?>
				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>