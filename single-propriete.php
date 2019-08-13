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
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="container">
			<h1 class="entry-title bg-spot">
				<?php the_title(); ?>
			</h1>

			<?php if (has_post_thumbnail()) : ?>
				<div class="row flex-md-row-reverse">
					<div class="col-md-6 col-lg-8">
            <?php the_content() ?>
            <?php get_template_part( 'template-parts/content', 'propriete' ) ?>
					</div>
				</div>
			<?php else : ?>
				<?php the_content() ?>
			<?php endif; ?>
		</article>
    <?php endwhile; ?>
    

    <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
<?php get_footer() ?>
