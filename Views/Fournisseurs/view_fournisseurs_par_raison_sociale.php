<form action="?controller=fournisseurs&action=fournisseurs_par_raison_sociale_resultat" method="post">

    <h1>Par Raison Sociale</h1>
    <select name="choix_fournisseurs_raison_sociale" id="choix_fournisseurs_raison_sociale">

        <option value="">Sélectionner un Fournisseur : </option>
        <?php  foreach($fournisseurs as $f ): ?>
            
                <option value="<?=$f->Raison_sociale?>"> <?=$f->Raison_sociale?> </option>
            
        <?php endforeach; ?>

    </select>

    <input type="submit" value="Rechercher">
</form>
        
          