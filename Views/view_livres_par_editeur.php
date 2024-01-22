<h1>Par Editeur :</h1>
<form action="?controller=livres&action=" method="post">
    <select name="choixtitre" id="choixtitre">
        <option value="">Sélectionner un Titre : </option>
        <?php foreach($livres as $l): ?>

            <option value="<?=$l->Titre_livre?>"> <?=$l->Editeur?> </option>

        <?php endforeach; ?>
    </select>
    <input type="submit" value="Rechercher">
</form>
               