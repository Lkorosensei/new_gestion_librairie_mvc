<div>
    <h1>Par Raison Sociale</h1>
    <select name="" id="">

        <option value="">Sélectionner un Fournisseur : </option>
        <?php  foreach($fournisseurs as $f ): ?>
            
                <option value=""><?=$f->Raison_sociale?></option>
            
        <?php endforeach; ?>

    </select>

    <button>Rechercher</button>

</div>            
          