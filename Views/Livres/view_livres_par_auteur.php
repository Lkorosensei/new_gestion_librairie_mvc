<h1>Par Auteur :</h1>
<form action="?controller=livres&action=livres_par_auteur_resultat" method="post">
    <select name="choix_livre_auteur" id="choix_livre_auteur">
        <option value="">Sélectionner un Titre : </option>
        <?php foreach($livres as $l): ?>

            <option value="<?=$l->Nom_auteur?>"> <?=$l->Nom_auteur?> <?=$l->Prenom_auteur?> </option>

        <?php endforeach; ?>
    </select>
    <input type="submit" value="Rechercher">
</form>
               