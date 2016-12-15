<?php
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php 
	$subtitle = get_field('subtitle');
	$pinterest = get_field('pinterest');
	$pinterest_description = get_field('pinterest_description');
	$question = get_field('discussion_question');
	$title = get_the_title();
?>
<section class="hero">
		<div class="row">
			<div class="small-12 columns">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				<?php if($subtitle != '') echo '<h3 class="subheader">'.$subtitle.'</h3>'; ?>
			</div>
		</div>
</section>
<section class="article">
	<div class="row" data-equalizer data-equalize-on="medium">
		<div class="small-12 large-8 columns post" data-equalizer-watch>
			<?php the_content(); ?>
		</div>
		<div class="small-12 large-4 columns">
			<div class="sidebar" data-equalizer-watch>
				<div class="image">
					<img alt="<?php the_title();?>" src="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-description="<?php echo $pinterest_description; ?>">
				</div>
				<h3>Welcome to SproutKit!</h3>
				<img src="https://s3-us-west-2.amazonaws.com/obstacleco-assets/wp-content/uploads/2016/10/30224737/treeme.jpg" data-pin-nopin="true">
				<p>Hi there!</p>
				<p>My name is Paul Scrivens (Scrivs) and I&rsquo;m here to take your blog from hobby to full-time business.</p>
			</div>
		</div>
	</div>
</section>
<section class="sharing">
	<div class="row">
		<div class="small-12 large-6 columns">
			<h2 class="">You don&rsquo;t get what you don&rsquo;t ask for so I&rsquo;m asking you to take a second to share <span class="post-title"><?php the_title(); ?></span> with your audience. They respect great content.</h2>
			<h3><a href="https://www.pinterest.com/pin/create/button/" class="large button expanded" data-pin-do="buttonPin" data-pin-id="<?php echo $pinterest_id; ?>" data-pin-custom="true" data-pin-description="<?php echo $pinterest_description;?>" data-pin-media="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink();?>"><strong><i class="fa fa-pinterest"></i> Share on Pinterest</a></strong></h3>
		</div>
		<div class="small-12 large-6 columns">
			<div class="image">
				<img alt="<?php the_title();?>" src="<?php echo $pinterest;?>" data-pin-url="<?php the_permalink(); ?>" data-pin-description="<?php echo $pinterest_description; ?>">
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="">More Great Content on SproutKit</h2>
			<div class="row">
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
			        $out = '<div class="small-6 large-3 columns end"><div class="article-box"><div class=""><img src="https://s3-us-west-2.amazonaws.com/sproutkit-master/wp-content/uploads/2016/10/10034336/favicon.png" data-pin-nopin="true"></div><h3><a href="'.get_permalink($cat_post->ID).'" title="'.wptexturize($cat_post->post_title).'">'.wptexturize($cat_post->post_title).'</a></h3><p>'.$pinterest.'</p></div></div>';
			        echo $out;
			    }
			    //$out = '<ul class="articles-list no-bullet">' . $out . '</ul>';
			?>
			</div>
		</div>
	</div>
</section>
<section class="comments">
	<div class="row">
		<div class="small-12 columns">
			<h2 class=""><?php if($question == '') { echo 'Join the Discussion'; } else { echo $question; }?></h2>
		</div>
		<div class="small-12 large-8 columns end">
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

				s.src = '//talented-underachiever.disqus.com/embed.js';

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