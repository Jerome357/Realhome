<?php

/**
 * The template file for archive
 *
 * ...
 *
 * @package scratch
 *
 */
get_header();
$champ_date = get_field_object('date');
$champ_texte = get_field_object('texte');
?>


    <div class="d-flex justify-content-between my-5">
        <div class="col-lg-10 col-md-8">
            <?php if (have_posts()) : while (have_posts()) :
                    the_post(); ?>
            <?php get_template_part('template-parts/content', 'actualite'); ?>
            <?php endwhile; ?>
            <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>  
        <div class="col-lg-2 col-md-4">
            <?php dynamic_sidebar('sidebar-lastactualites-aside'); ?>
        </div>
    </div>

<?php get_footer() ?>
