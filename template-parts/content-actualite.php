<?php
$champ_date = get_field_object('date');
$champ_corps_de_texte = get_field_object('corps_de_texte');
?>

<div class="container mt-2">
  <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
  <div id="grey">
    <?= $champ_date[''] ?><strong><?= $champ_date['value'] ?><br>
  </div>
  <figure>
    <?= get_the_post_thumbnail($post->ID, 'thumb-1000', array('class' => 'img-fluid card-propriete_img')) ?>
  </figure>
  <article <?php post_class('card-propriete-article'); ?>>
    <div class="text-justify">
      <?= wp_trim_words($champ_corps_de_texte['value'], 20, '...'); ?>
    </div>
    <div>
      <a href=<?php the_permalink(); ?> class="btn btn-outline-danger my-5"><?php _e('Lire la suite', 'scratch'); ?></a>
    </div>
</div>