<h1>Par Auteur :</h1>
<form action="?controller=livres&action=" method="post">
    <select name="choixtitre" id="choixtitre">
        <option value="">Sélectionner un Titre : </option>
        <?php foreach($livres as $l): ?>

            <option value="<?=$l->Titre_livre?>"> <?=$l->Nom_auteur?> <?=$l->Prenom_auteur?> </option>

        <?php endforeach; ?>
    </select>
    <input type="submit" value="Rechercher">
</form>
               