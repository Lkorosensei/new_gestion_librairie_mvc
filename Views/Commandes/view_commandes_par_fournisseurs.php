<form action="?controller=commandes&action=commandes_par_fournisseurs_resultat" method="post">
    <h1>Par Fournisseur</h1>
    <select name="choix_commandes_fournisseurs" id="choix_commandes_fournisseurs">

        <option value="">Sélectionner un Fournisseur : </option>
        <?php  foreach($commandes as $c ): ?>
            
                <option value="<?=$c->Raison_sociale?>"> <?=$c->Raison_sociale?> </option>
            
        <?php endforeach; ?>

    </select>

    <button type="submit">Rechercher</button>

</form>
         
          