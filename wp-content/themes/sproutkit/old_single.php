<?php
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php 
	$image = get_field('hero_image');
	$subtitle = get_field('subtitle');
	$pinterest = get_field('pinterest');
	$pinterest2 = get_field('pinterest_2');
	$pinterest3 = get_field('pinterest_3');
	$pinterest4 = get_field('pinterest_4');
	$pinterest5 = get_field('pinterest_5');
	$pinterest6 = get_field('pinterest_6');
	$pinterest_id = get_field('pinterest_id');
	$pinterest_description = get_field('pinterest_description');
	$question = get_field('discussion_question');
	$title = get_the_title();

?>
<!--<section class="hero" style="<?php if($image != '') { ?> background: linear-gradient(90deg, rgba(51,51,51, 0.75) 10%, rgba(51,51,51, 0.75) 90%), url('<?php echo $image['url']; ?>') no-repeat fixed center;background-size: cover;" <?php } ?>">-->
<section class="lead-single">
	<div class="lead-container">
		<div class="row">
			<div class="small-12 columns">
				<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
				<?php if($subtitle != '') echo '<h2 class="subheader">'.$subtitle.'</h2>'; ?>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 columns">
			<?php the_content(); ?>
		</div>
	</div>
</section>
<section class="sharing">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center">You don&rsquo;t get what you don&rsquo;t ask for so I&rsquo;m asking you to take a second to share <em><?php the_title(); ?></em> with your audience. They respect great content.</h2>
		</div>
		<div class="small-12 large-6 columns">
			<h3><a data-url="<?php the_permalink();?>" data-via="theobstacleco" href="https://twitter.com/intent/tweet?text=<?php echo urlencode($title); ?>&url=<?php the_permalink();?>&via=theobstacleco" class="button large expanded"><i class="fa fa-twitter"></i> Share on Twitter</a></h3>
			<p>Share this on Twitter because you want to be that person people go to that has all of the good stuff.</p>
		</div>
		<div class="small-12 large-6 columns">
			<h3><a target="_blank" href="https://www.facebook.com/dialog/share?app_id=241552952902856&display=popup&href=<?php the_permalink(); ?>&redirect_uri=<?php the_permalink(); ?>" class="button large expanded"><i class="fa fa-facebook"></i> Share on Facebook</a></h3>
			<p>Share this on Facebook because your family and former high school classmates need to be impressed with the knowledge that you have attained.</p>
		</div>
			<?php if($pinterest != '') : ?>
				<div class="small-12 large-6 large-offset-3 end columns">
				<h3><a href="https://www.pinterest.com/pin/create/button/" class="large button expanded" data-pin-do="buttonPin" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-custom="true" data-pin-description="<?php echo $pinterest_description;?>" data-pin-media="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink();?>"><i class="fa fa-pinterest"></i> Share on Pinterest</a></h3>
				<p>Share this on Pinterest because I took the time to create these awesome images just so you could have something wonderful to pin.</p>
			<?php endif; ?>
		</div>
		<?php if($pinterest != '') : ?>
			<div class="small-12 columns">
				<h3 class="text-center">Wonderful Images to Pin</h3>
				<ul class="pinterest-list no-bullet clearfix">
					<li><img alt="<?php the_title();?>" src="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-description="<?php echo $pinterest_description; ?>"></li>
					<li><img alt="<?php the_title();?>" src="<?php echo $pinterest2;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-description="<?php echo $pinterest_description; ?>"></li>
					<li><img alt="<?php the_title();?>" src="<?php echo $pinterest3;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-description="<?php echo $pinterest_description; ?>"></li>
					<li><img alt="<?php the_title();?>" src="<?php echo $pinterest4;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-description="<?php echo $pinterest_description; ?>"></li>
					<li><img alt="<?php the_title();?>" src="<?php echo $pinterest5;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-description="<?php echo $pinterest_description; ?>"></li>
					<li><img alt="<?php the_title();?>" src="<?php echo $pinterest6;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-description="<?php echo $pinterest_description; ?>"></li>
				</ul>
			</div>
		<?php endif;?>
		<div class="small-12 columns">
			<h2 class="text-center">Shared <em><?php the_title(); ?></em> with your all of your peeps (those are your friends and family)?  Awesome! Thanks so much. Now, why don&rsquo;t you join the discussion below?<!--<br><i class="fa fa-arrow-down"></i>--></h2>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center">More Great Content on Obstacle.co</h2>
			<?php
			global $post;
			$cat_ID=array();
			$categories = get_the_category(); //get all categories for this post
			  foreach($categories as $category) {
			    array_push($cat_ID,$category->cat_ID);
			  }
			  $args = array(
			  'orderby' => 'date',
			  'order' => 'DESC',
				'post_type' => 'post',
				'numberposts' => 20,
				'post__not_in' => array($post->ID)
				//'category__in' => $cat_ID
			  ); // post__not_in will exclude the post we are displaying
			    $cat_posts = get_posts($args);
			    $out='';
			    foreach($cat_posts as $cat_post) {
			      	$pinterest = get_field('pinterest_description', $cat_post->ID);
			        //$out .= '<li>';
			        //$out .=  '<a href="'.get_permalink($cat_post->ID).'" title="'.wptexturize($cat_post->post_title).'"><img data-pin-nopin="true" title="'.$cat_post->post_title.'" alt="'.$cat_post->post_title.'" src="'.$pinterest.'"></a></li>';
			        $out = '<div class="small-6 large-3 columns end"><div class="article-box"><h3><a href="'.get_permalink($cat_post->ID).'" title="'.wptexturize($cat_post->post_title).'">'.wptexturize($cat_post->post_title).'</a></h3><p>'.$pinterest.'</p></div></div>';
			        echo $out;
			    }
			    //$out = '<ul class="articles-list no-bullet">' . $out . '</ul>';
			?>
		</div>
	</div>
</section>
<section class="comments">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center"><?php if($question == '') { echo 'Join the Discussion'; } else { echo $question; }?></h2>
		</div>
		<div class="small-12 large-8 large-offset-2 columns end">
			<div class="comment-box">
				<div id="disqus_thread"></div>
				<script>
				/**
				* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
				*/
				var disqus_config = function () {
				this.page.url = '<?php the_permalink(); ?>'; // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = '<?php the_ID(); ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
				};
				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');

				s.src = '//obstacledotco.disqus.com/embed.js';

				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
			</div>
		</div>
	</div>
</section>
<?php endwhile;endif; ?>
<?php
get_footer();
?>