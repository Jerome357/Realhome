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
?>
​
<main class="py-5 container">
    ​
    <?php the_archive_title('<h1 class="page-title">', '</h1>') ?>
    ​
    <div class="row">
        ​
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        ​
        <article class="col-md-6 col-lg-4">
            <a href="<?php the_permalink() ?>">
                <h2 class="entry-title"><?php the_title() ?></h2>
                <?php the_post_thumbnail('thumb-510', array('class' => 'img-fluid')); ?>
            </a>
            <p>
                <?php the_excerpt() ?>
            </p>
        </article>
        <?php endwhile; ?>

        <section class="front-proprietes container">
            <?php if ($lastproprietes) : ?>
            <div class="front-proprietes_grid">
                <?php foreach ($lastproprietes as $post) :
                            setup_postdata($post);
                            get_template_part('template-parts/content', 'propriete');

                        endforeach;
                        wp_reset_postdata(); ?>
            </div>
            <?php endif; ?>

            <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            ​
    </div>
</main>
​
<?php get_footer() ?>