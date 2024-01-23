<div>
    <h1>Par raison sociale</h1>
<table id='table'>
    <thead >
        <th>code_fournisseur</th>
        <th>raison_sociale</th>
        <th>rue_fournisseur</th>
        <th>code_postal</th>
        <th>localite</th>
        <th>pays</th>
        <th>tel_fournisseur</th>
        <th>url_fournisseur</th>
        <th>email_fournisseur</th>
        <th>fax_fournisseur</th>
        <!-- <th>Langue</th> -->
    </thead>
    <?php  foreach($fournisseurs as $f ): ?>
    <tr>
        <td><?=$f->Code_fournisseur?></td>
        <td><?=$f->Raison_sociale?></td>
        <td><?=$f->Rue_fournisseur?></td>
        <td><?=$f->Code_postal?></td>
        <td><?=$f->Localite?></td>
        <td><?=$f->Pays?></td>
        <td><?=$f->Tel_fournisseur?></td>
        <td><?=$f->Url_fournisseur?></td>
        <td><?=$f->Email_fournisseur?></td>
        <td><?=$f->Fax_fournisseur?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div> 