<h1>Par Editeur :</h1>
<form action="?controller=livres&action=livres_par_editeur_resultat" method="post">
    <select name="choix_livre_editeur" id="choix_livre_editeur">
        <option value="">Sélectionner un Titre : </option>
        <?php foreach($livres as $l): ?>

            <option value="<?=$l->Editeur?>"> <?=$l->Editeur?> </option>

        <?php endforeach; ?>
    </select>
    <input type="submit" value="Rechercher">
</form>
               