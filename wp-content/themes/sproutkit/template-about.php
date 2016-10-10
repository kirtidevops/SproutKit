<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="lead-single">
	<div class="lead-container">
		<div class="row">
			<div class="small-12 columns">
				<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
				<h2 class="subheader">Because Dreaming Doesn&rsquo;t Get You Results</h2>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 large-6 columns">
			<?php the_content(); ?>
		</div>
		<div class="small-12 large-6 columns">
			<div class="image"><img src="https://s3-us-west-2.amazonaws.com/obstacleco-assets/wp-content/uploads/2016/06/22144311/treeme.jpg" alt="Paul Scrivens"></div>
			<p class="caption">This is me. Big nostrils, gap in teeth, losing hair and an inability to button shirts all the way.</p>
			<h3>About Me</h3>
			<p>So who am I? I&#8217;m Paul Scrivens and I&#8217;ve been without a <em>real job</em> since 2014. 3 years prior to that I was building sites and running a ton of different business experiments. The in-between time I held down jobs as a product designer, senior product manager, and director of product development. </p>
			<p>I&#8217;ve been blogging since 2003 and my first company was a blogging network that I ended up selling with my partners. Currently, I help people learn how to build websites and web applications at <a href="https://makerslibrary.com">Makers Library</a> and <a href="https://makerscabin.com">Makers Cabin</a>.</p>
			<p>I love to experiment with ideas to see what works and what doesn&#8217;t. I&#8217;ve built and launched over 40 sites on my own. Some great, some terrible.</p>
			<p>Obstacle.co was created to put all my knowledge to the test to see if I really learned anything after all of these years of building businesses or am I really full of shit?</p>
			<p>Only time will tell.</p>
			<p>Want to reach out to me? Hit me up on <a href="http://twitter.com/scrivs">Twitter</a> first and we can go from there.</p>
		</div>
	</div>
</section>
<section class="cta">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="text-center">Follow Along on Social Media</h2>
		</div>
		<div class="small-12 large-4 columns">
			<h3 class="text-center"><a href="https://www.pinterest.com/obstacleco/">Pinterest</a></h3>
			<p>I&#8217;m super excited about what Pinterest has to offer for those people looking to learn more about blogging and building a business. It has become the perfect curation platform for awesome content.</p>
			<p>The <a href="https://www.pinterest.com/obstacleco/">Obstacle.co Pinterest account</a> looks for the best content around that will help you get closer to your dream lifestyle. Because it is Pinterest and images mean a lot, there are times where I&#8217;ll come across an awesome piece of content that I can&#8217;t share on Pinterest because there isn&#8217;t a good image to represent it. </p>
		</div>
		<div class="small-12 large-4 columns">
			<h3 class="text-center"><a href="https://twitter.com/TheObstacleCo">Twitter</a></h3>
			<p>Twitter is where every great piece of content I come across will be posted. I&#8217;ll also share mini-updates on the progress of the blogs that I am building and obstacles (*cough*) I run into.</p>
			<p>If you want to ensure you have a daily dose of learning, then Twitter will be a great medium for you.</p>
		</div>
		<div class="small-12 large-4 columns">
			<h3 class="text-center"><a href="https://www.facebook.com/theobstacleco/">Facebook</a></h3>
			<p>I&#8217;ll be honest with you. Facebook isn&#8217;t a place I frequent a lot, but I&#8217;m looking to get more into what it is capable of with regards to community building. The <a href="https://www.facebook.com/theobstacleco/">Obstacle.co Facebook page</a> will have the least amount of daily updates of all of the social media networks and unfortunately simply liking the page doesn&#8217;t guarantee that you will see all of the posts.</p>
			<p>If Facebook is a place you frequent and you don&#8217;t want only politics and religion clogging up your feed, then give the page a like.</p>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>