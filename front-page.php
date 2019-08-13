<?php
/**
 * The main template file
 *
 * ...
 *
 * @package scratch
 *
 */


$lastproprietes = get_posts(array(
	'numberposts' => 5,
	'post_type' => 'propriete',
));

get_header();
?>

<main class="py-6">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="container">
			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>

			<?php if (has_post_thumbnail()) : ?>
				<div class="row flex-md-row-reverse">
					<div class="col-md-3 col-lg-3">
						<?php the_post_thumbnail('thumb-510', array('class'=>'img-fluid')); ?>
					</div>
					<div class="col-md-6 col-lg-8">
						<?php the_content() ?>
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

</main>

<section class="front-proprietes container">
  <?php if ( $lastproprietes ) : ?>
    <div class="front-proprietes_grid">
      <?php foreach ( $lastproprietes as $post ) :
          setup_postdata( $post );	
          get_template_part( 'template-parts/content', 'propriete' );

      endforeach; 
      wp_reset_postdata(); ?>
    </div>
  <?php endif;?>
  <div class="text-center">
    <a href="<?= esc_url( home_url( '/' ) ) ?>/propriete/" class="btn btn-outline-primary my-5"><?php _e('Toutes les propriétés', 'scratch'); ?></a>
  </div>
</section>


<?php get_footer() ?>
