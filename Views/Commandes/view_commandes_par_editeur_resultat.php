<div>
    <h1>Toutes les commandes</h1>
<table id='table'>
    <thead >
        <th>Titre</th>
        <th>Theme</th>
        <th>Nom Auteur</th>
        <th>Prenom Auteur</th>
        <th>Date d'achat</th>
        <th>Prix</th>
        <th>Nombre d'exemplaire</th>
    </thead>
    <?php  foreach($commandes as $c ): ?>
    <tr>
        <td><?=$c->Titre_livre?></td>
        <td><?=$c->Theme_livre?></td>
        <td><?=$c->Nom_auteur?></td>
        <td><?=$c->Prenom_auteur?></td>
        <td><?=$c->Prix_achat?></td>
        <td><?=$c->Nbr_exemplaires?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div> 