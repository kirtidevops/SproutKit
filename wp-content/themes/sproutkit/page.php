<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="lead-single">
	<div class="lead-container">
		<div class="row">
			<div class="small-12 columns">
				<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
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
<?php endwhile; endif; ?>
<?php get_footer(); ?>