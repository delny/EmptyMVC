<?php
/**
 * Created by PhpStorm.
 * User: a.delgado
 * Date: 17/11/2017
 * Time: 10:01
 */
$titre = WEBSITE_TITLE.' -- Ajouter Liste';
?>

<?php ob_start(); ?>

    <h1>Liste de fruits et de l&eacute;gumes</h1>

    <h2>Ajouter un fruit ou un l&eacute;gume</h2>
    <form method="post">
        <div class="form-group">
            <label for="name">Nom du fruit/l&eacute;gume</label>
            <input type="text" class="form-control" id="name"placeholder="Nom">
        </div>
        <div class="form-group">
            <label for="type">Fruit ou l&eacute;gume ?</label>
            <select multiple class="form-control" id="type">
                <option>Fruit</option>
                <option>L&eacute;gume</option>
                <option>Les deux (comme la tomate)</option>
                <option>Aucun des deux (c'est vraiment possible ?)</option>
                <option>Je ne sais pas</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

<?php $contenu = ob_get_clean(); ?>

<?php
$donnees_vue = array(
    "titre" => $titre,
    "contenu" => $contenu
);
