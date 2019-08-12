<?php
$champ_prix = get_field_object('prix');
$champ_infos = get_field_object('infos');
$champ_illustration = get_field_object('illustration');
$champ_surface = get_field_object('surface');
$champ_ville = get_field_object('ville');
$champ_description = get_field_object('description');
$champ_nombredechambres = get_field_object('nombre_de_chambres');
?>




<article <?php post_class('card-propriete-article'); ?>>
  <a class="card-spot_link" href="<?php the_permalink(); ?>">
    <figure class="card-propriete-figure mb-0">
      <?= get_the_post_thumbnail($post->ID, 'thumb-555', array( 'class' => 'img-fluid card-propriete_img' )) ?>
    </figure> 
    <p><?= $champ_prix['label'] ?> : <strong><?= $champ_prix['value'] ?> <?= $champ_prix['append'] ?></strong></p>
    <p><?= $champ_infos['label'] ?> : <strong><?= $champ_infos['value'] ?> <?= $champ_infos['append'] ?></strong></p>
    <p><?= $champ_illustration['label'] ?> : <strong><?= $champ_illustration['value'] ?> <?= $champ_illustration['append'] ?></strong></p>
    <p><?= $champ_surface['label'] ?> : <strong><?= $champ_surface['value'] ?> <?= $champ_surface['append'] ?></strong></p>
    <p><?= $champ_ville['label'] ?> : <strong><?= $champ_ville['value'] ?> <?= $champ_ville['append'] ?></strong></p>
    <p><?= $champ_description['label'] ?> : <strong><?= $champ_description['value'] ?> <?= $champ_description['append'] ?></strong></p>
    <p><?= $champ_nombredechambres['label'] ?> : <strong><?= $champ_nombredechambres['value'] ?> <?= $champ_nombredechambres['append'] ?></strong></p>
    <div class="card-propriete_content p-3">
      <?php the_title( '<h2 class="entry-title h4">', '</h2>' ); ?>
      <p class="card-propriete_excerpt"><?= wp_trim_words( get_the_content(), 20, '...' ); ?></p>
      <button class="card-propriete_btn btn btn-outline-light"><?php _e( 'Read More', 'scratch' ) ?></button>
    </div>
  </a>
</article>