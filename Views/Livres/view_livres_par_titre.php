<h1>Par Titre :</h1>
<form action="?controller=livres&action=livres_par_titre_resultat" method="post">
    <select name="choix_livre_titre" id="choix_livre_titre">
        <option value="">Sélectionner un Titre : </option>
        <?php foreach($livres as $l): ?>

            <option value="<?=$l->Titre_livre?>"><?=$l->Titre_livre?></option>

        <?php endforeach; ?>
    </select>
    <input type="submit" value="Rechercher">
</form>
               