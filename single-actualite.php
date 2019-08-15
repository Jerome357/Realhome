<?php
$champ_date = get_field_object('date');
$champ_corps_de_texte = get_field_object('corps_de_texte');


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
<div class="container my-5">
	<div class="row">
		<div class="col-md-8">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="container">
				<h1 class="entry-title bg-spot">
					<?php the_title(); ?>
				</h1>
				<?php if (has_post_thumbnail()) : ?>
				<figure>
					<?= get_the_post_thumbnail($post->ID, 'thumb-1000', array('class' => 'img-fluid card-propriete_img')) ?>
				</figure>
				<?php the_content() ?>
				<?= $champ_corps_de_texte[''] ?><strong><?= $champ_corps_de_texte['value'] ?>
					<?php else : ?>
					<?php the_content() ?>
					<?php endif; ?>
			</article>
			<?php endwhile; ?>
		</div>
		<div class="col-md-4">
            <?php dynamic_sidebar('sidebar-lastactualites-aside'); ?>
        </div>
	</div>
</div>

<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<?php get_footer() ?>