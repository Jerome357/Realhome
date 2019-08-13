<?php
$champ_date = get_field_object('date');
$champ_corps_de_texte = get_field_object('corps_de_texte');
?>



<article <?php post_class('card-propriete-article'); ?>>
  <a class="card-spot_link">
    <p><?= $champ_date[''] ?><strong><?= $champ_date['value'] ?> <?= $champ_prix['append'] ?></strong></p>
    <p><?= $champ_corps_de_texte[''] ?><strong><?= $champ_corps_de_texte['value'] ?> <?= $champ_corps_de_texte['append'] ?></strong></p>
    <div class="card-propriete_content p-3">
  </a>
</article>
</div>
