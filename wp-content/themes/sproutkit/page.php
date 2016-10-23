<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="hero">
	<div class="row">
		<div class="small-12 columns">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		</div>
	</div>
</section>
<section class="article">
	<div class="row">
		<div class="small-12 large-8 end columns">
			<?php the_content(); ?>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>