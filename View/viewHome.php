<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 10/11/2017
 * Time: 10:09
 */
$titre = WEBSITE_TITLE.' -- Accueil';
?>

<?php ob_start(); ?>

    <div class="jumbotron">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">This is an example of homepage using Bootstrap</p>
        <hr class="my-4">
        <p>to change this view completely, you can change between ob_start() and ob_get_clean() </p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Just a button</a>
        </p>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php
$donnees_vue = array(
    "titre" => $titre,
    "contenu" => $contenu
);
