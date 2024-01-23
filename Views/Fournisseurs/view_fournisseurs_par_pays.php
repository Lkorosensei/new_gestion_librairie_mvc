<form action="?controller=fournisseurs&action=fournisseurs_par_pays_resultat" method="post">
    <h1>Par Pays</h1>
    <select name="choix_fournisseurs_pays" id="choix_fournisseurs_pays">

        <option value="">Sélectionner un Pays : </option>
        <?php  foreach($fournisseurs as $f ): ?>
            
                <option value="<?=$f->Pays?>"> <?=$f->Pays?> </option>
            
        <?php endforeach; ?>

    </select>

    <input type="submit" value="Rechercher">

</form>
         
          