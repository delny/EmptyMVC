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
        <p class="lead">This is an example of project coded in php on the standard mvc using Bootstrap 4.0</p>
        <hr class="my-4">
        <p>You can access to the code on my Github account : </p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="https://github.com/delny/EmptyMVC" role="button">Just here</a>
        </p>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php
$donnees_vue = array(
    "titre" => $titre,
    "contenu" => $contenu
);
