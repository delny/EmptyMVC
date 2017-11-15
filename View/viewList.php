<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 10:09
 */
$titre = WEBSITE_TITLE.' -- Liste';
?>

<?php ob_start(); ?>

<h1>Liste de fruits et de l&eacute;gumes</h1>

    <h2>Fruits</h2>
    <ul class="list-group">
        <?php
        foreach ($fruits as $fruit){
            ?><li class="list-group-item"><?php echo $fruit; ?></li><?php
        }
        ?>
    </ul>

    <h2>L&eacute;gumes</h2>
    <ul class="list-group">
        <?php
        foreach ($vegetables as $vegetable){
            ?><li class="list-group-item"><?php echo $vegetable; ?></li><?php
        }
        ?>
    </ul>

<?php $contenu = ob_get_clean(); ?>

<?php
$donnees_vue = array(
    "titre" => $titre,
    "contenu" => $contenu
);

