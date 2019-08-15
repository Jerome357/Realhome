<?php

/**
 * The template file for archive
 *
 * ...
 *
 * @package scratch
 *
 */
$lastproprietes = get_posts(array(
    'numberposts' => 9,
    'post_type' => 'propriete',
    'orderby' => 'rand'
));

get_header();
?>
​

<div class="row">
    <section class="py-front-proprietes container">
        <?php if ($lastproprietes) : ?>
        <div class="row front-proprietes_grid">
            <?php foreach ($lastproprietes as $post) :
                    setup_postdata($post);
                    get_template_part('template-parts/content', 'propriete');
                endforeach;
                wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>
</div>
</div>

​
<?php get_footer() ?>