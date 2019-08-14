<?php
$champ_date = get_field_object('date');
$champ_corps_de_texte = get_field_object('corps_de_texte');
?>


<figure>
<p><?= $champ_date[''] ?><strong><?= $champ_date['value'] ?> <?= $champ_prix['append'] ?></strong></p>
  <?= get_the_post_thumbnail($post->ID, 'thumb-1000', array('class' => 'img-fluid card-propriete_img')) ?>
</figure>
<article <?php post_class('card-propriete-article'); ?>>
  <a class="card-spot_link">
    <p><?= $champ_date[''] ?><strong><?= $champ_date['value'] ?> <?= $champ_prix['append'] ?></strong></p>
    <p><?= $champ_corps_de_texte[''] ?><strong><?= $champ_corps_de_texte['value'] ?> <?= $champ_corps_de_texte['append'] ?></strong></p>
  </a>
</article>

<div class="text-justify">
  <?= wp_trim_words($champ_corps['value'], 20, '...'); ?>
  <?php the_excerpt(); ?>
</div>
<button class="card-spot_btn btn btn-outline-warning"><?php _e('Lire la suite', 'scratch') ?></button>
</div>