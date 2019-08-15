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

$lastpropriete = get_posts(array(
	'numberposts' => 4,
	'post_type' => 'propriete',
	'orderby' => 'rand'
));

?>

<?php
$nombreDeChambres = get_field_object('nombre_de_chambres');
$surface = get_field_object('surface');
$informations = get_field_object('informations');
$prix = get_field_object('prix');
$description = get_field_object('description');
$ville = get_field_object('ville');
?>

<section id="primary" class="content-area container mt-5">
	<main id="main" class="site-main">

		<article>
			<div class="card-propriete_content d-flex">
				<div class="image_propriete pr-5 mt-3">
					<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
					<?php the_post_thumbnail('thumb-255', array('class' => 'img-fluid')); ?></p>
				</div>
				<div class="carac_propriete mt-5">
					<p id="prix"><?= $prix['value'] ?> <?= $prix['append'] ?></p>
					<hr />
					<p><?=  $ville['label'] ?> : <strong><?= $ville['value'] ?></strong></p>
					<p><?= $nombreDeChambres['label'] ?> : <strong><?= $nombreDeChambres['value'] ?></strong></p>
					<p><?= $surface['label'] ?> : <strong><?= $surface['value'] ?> <?= $surface['append'] ?></strong></p>
					<p><?= $informations['label'] ?> <strong><?= $informations['value'] ?> <?= $informations['append'] ?></strong></p>
					<p><?= $description['value'] ?> </p>
					<hr />
				</div>
			</div>
			<hr />
		</article>

	</main>
</section>

<div class="row">
<section class="container">
	<div class="titre_nos_propriétés text-center m-5">
		<h2>Nos propriétés</h2>
	</div>
	<?php if ($lastpropriete) : ?>
	<div class="row front-proprietes_grid">
		<?php foreach ($lastpropriete as $post) :
				setup_postdata($post);
				get_template_part('template-parts/content', 'propriete');

			endforeach;
			wp_reset_postdata(); ?>
	</div>
	<?php endif; ?>
	<div class="text-center">
		<a href="<?= esc_url(home_url('/')) ?>/propriete/" class="btn btn-outline-danger my-5"><?php _e('Toutes nos propriétés', 'scratch'); ?></a>
	</div>
</section>
</div>

<?php get_footer() ?>
<?php
