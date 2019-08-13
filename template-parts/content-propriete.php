<?php
$champ_prix = get_field_object('prix');
$champ_surface = get_field_object('surface');
$champ_ville = get_field_object('ville');
$champ_description = get_field_object('description');
$champ_nombredechambres = get_field_object('nombre_de_chambres');
$champ_infos = get_field_object('infos');
?>



<article <?php post_class('card-propriete-article col-md-4'); ?>>
  <a class="card-spot_link" href="<?php the_permalink(); ?>">
    <div class="card" style="width: 350px;">
      <figure class="card-propriete-figure mb-0">
        <?= get_the_post_thumbnail($post->ID, 'thumb-555', array('class' => 'img-fluid card-propriete_img')) ?>
      </figure>
      <div class="card-body justify-content-center">
        <?php the_title('<h2 class="entry-title h4">', '</h2>'); ?>
        <p><?= $champ_ville['label'] ?> : <strong><?= $champ_ville['value'] ?> <?= $champ_ville['append'] ?></strong></p>
        <p><?= $champ_prix['label'] ?> : <strong><?= $champ_prix['value'] ?> <?= $champ_prix['append'] ?></strong></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between">
        <strong class=""><?= $champ_surface['value'] ?> <?= $champ_surface['append'] ?></strong>
        <strong><?= $champ_nombredechambre['value'] ?> <?= $champ_nombredechambre['append'] ?></strong> 
        <strong><?= $champ_infos['value']?> <?= $champ_infos['append'] ?></strong>
      </li>
      </ul>
    </div>
  </a>