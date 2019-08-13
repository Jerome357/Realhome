<?php
$champ_date = get_field_object('date');
$champ_illustration = get_field_object('illustration');
$champ_corps_de_texte = get_field_object('corps_de_texte');
?>


<div class="card" style="width: 18rem;">
<figure class="card-propriete-figure mb-0">
        <?= get_the_post_thumbnail($post->ID, 'thumb-555', array('class' => 'img-fluid card-propriete_img')) ?>
      </figure>
<article <?php post_class('card-propriete-article'); ?>>
  <a class="card-spot_link" href="<?php the_permalink(); ?>">
    <p><?= $champ_date['label'] ?> : <strong><?= $champ_date['value'] ?> <?= $champ_prix['append'] ?></strong></p>
    <p><?= $champ_illustration['label'] ?> : <strong><?= $champ_illustration['value'] ?> <?= $champ_illustration['append'] ?></strong></p>
    <p><?= $champ_corps_de_texte['label'] ?> : <strong><?= $champ_corps_de_texte['value'] ?> <?= $champ_corps_de_texte['append'] ?></strong></p>
    <div class="card-propriete_content p-3">
  </a>
</article>
</div>
