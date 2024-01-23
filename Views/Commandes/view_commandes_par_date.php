<form action="?controller=commandes&action=commandes_par_date_resultat" method="post">
    <h1>Par Date</h1>
    <select name="choix_commandes_date" id="choix_commandes_date">

        <option value="">Sélectionner une Date : </option>
        <?php  foreach($commandes as $c ): ?>
            
                <option value="<?=$c->Date_achat?>"> <?=$c->Date_achat?> </option>
            
        <?php endforeach; ?>

    </select>

    <button type="submit">Rechercher</button>
       
</form>          