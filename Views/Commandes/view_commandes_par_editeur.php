<form action="?controller=commandes&action=commandes_par_editeur_resultat" method="post">
    <h1>Par Editeur</h1>
    <select name="choix_commandes_editeur" id="choix_commandes_editeur">

        <option value="">Sélectionner un Editeur : </option>
        <?php  foreach($commandes as $c ): ?>
            
                <option value="<?=$c->Editeur?>"> <?=$c->Editeur?> </option>
            
        <?php endforeach; ?>

    </select>

   <button type="submit">Rechercher</button>

</form>           
          