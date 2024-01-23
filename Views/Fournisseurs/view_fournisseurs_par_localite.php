    <h1>Par Localite</h1>
    <form action="?controller=fournisseurs&action=fournisseurs_par_localite_resultat" method="post">
        <select name="choix_fournisseurs_localite" id="choix_fournisseurs_localite">

            <option value="">Sélectionner une Localite : </option>
            <?php  foreach($fournisseurs as $f ): ?>
                
                    <option value="<?=$f->Localite?>"> <?=$f->Localite?> </option>
                
            <?php endforeach; ?>

        </select>

        <input type="submit" value="Rechercher">
    </form>

            
          