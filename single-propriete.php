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
$infos = get_field_object('infos');
$prix = get_field_object('prix');
$description = get_field_object('description');
$ville = get_field_object('ville');
?>

<div class="container">
	<div class="d-flex justify-content-between mt-5">
		<div class="container col-8 p-0 mr-5">
			<?php the_title('<h2 class="entry-title">', '</h2>'); ?><br>
			<?php the_post_thumbnail('thumb-255', array('class' => 'img-fluid')); ?></p>
		</div>
		<div class="container col-4 mr-5">
			<p id="prix"><?= $prix['value'] ?> <?= $prix['append'] ?></p>
			<hr />
			<p><?= $ville['label'] ?> : <strong><?= $ville['value'] ?></strong></p>
			<p><?= $nombreDeChambres['label'] ?> : <strong><?= $nombreDeChambres['value'] ?></strong></p>
			<p><?= $surface['label'] ?> : <strong><?= $surface['value'] ?> <?= $surface['append'] ?></strong></p>
			<p><?= $infos['label'] ?> : <strong><?= $infos['value'] ?> <?= $infos['append'] ?></strong></p>
			<hr />
			<p><?= $description['value'] ?> </p>
			<hr />
		</div>
	</div>
</div>
<hr />


<div class="container">
	<div class="text-center m-5">
		<h1>Nos propriétés</h1>
	</div>
	<?php if ($lastpropriete) : ?>
	<div class="row justify-content-between">
		<?php foreach ($lastpropriete as $post) :
				setup_postdata($post);
				get_template_part('template-parts/content', '4proprietes');

			endforeach;
			wp_reset_postdata(); ?>
	</div>
	<?php endif; ?>
	<div class="text-center">
		<a href="<?= esc_url(home_url('/')) ?>/propriete/" class="btn btn-outline-danger my-5"><?php _e('Toutes nos propriétés', 'scratch'); ?></a>
	</div>

</div>

<?php get_footer() ?>
<?php
