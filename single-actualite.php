<?php

/**
 * The main template file
 *
 * ...
 *
 * @package scratch
 *
 */


get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="container">
				<h1 class="entry-title bg-spot">
					<?php the_title(); ?>
				</h1>
				<?php if (has_post_thumbnail()) : ?>
				<?php the_content() ?>
				
				<?php else : ?>
				<?php the_content() ?>
				<?php endif; ?>
			</article>
			<?php endwhile; ?>
		</div>
	</div>
</div>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer() ?>