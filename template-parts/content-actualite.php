<?php
$champ_date = get_field_object('date');
$champ_corps_de_texte = get_field_object('corps_de_texte');
?>

<?= $champ_date[''] ?><strong><?= $champ_date['value'] ?><br>
<figure>
  <?= get_the_post_thumbnail($post->ID, 'thumb-1000', array('class' => 'img-fluid card-propriete_img')) ?>
</figure>
<article <?php post_class('card-propriete-article'); ?>>
    <?= $champ_corps_de_texte[''] ?><strong><?= $champ_corps_de_texte['value'] ?>
    <div class="text-justify">
        <?= wp_trim_words($champ_corps_de_texte['value'], 20, '...'); ?>
    </div>
  </a>
</article>


