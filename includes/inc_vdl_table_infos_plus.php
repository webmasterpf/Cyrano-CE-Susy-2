<?php
// fichier pour le tableau listant les champs d'un contenu VDL, afin de les organiser.Affichage conditionnel php
// n'utilise pas de vue.
//  http://drupalfr.org/forum/support/developpement/26886-resolu-affichage-conditionnel-dans-template-de-valeurs-cck

?>
<?php
if (
                $node->field_relatif_formation[0]['view']
                OR $node->field_fiche_action[0]['view']
                OR $node->field_lien_utile_vdl[0]['view']
                OR $node->field_lien_utile_vdl[1]['view']
                OR $node->field_lien_utile_vdl[2]['view']
        
):
    ?>
<table id="table_infos_plus" border="0">
    <tbody>
        <tr><td><h3>Infos en plus</h3> </td></tr>
        <?php            if (!empty($node->field_relatif_formation[0]['view'])):?>
        <tr>
            <td> <p>Sortie réalisée dans le cadre de la formation:<br>
                    <?php  print $node->field_relatif_formation[0]['view'] /*Noderef fiche*/ ?></p>
                <hr class="ombrage_bas"/>
            </td>
        </tr>
        <?php   endif;?>
    
                <?php if ($node->field_fiche_action[0]['view']): ?>
            <tr><td>
                    <?php  print $node->field_fiche_action[0]['view'] /*Fiche action*/ ?>
                <hr class="ombrage_bas"/></td></tr>
                <?php endif; ?>
        <?php // Tableau dynamique pour lister les fichiers joints ?>
           <?php foreach($node->field_lien_utile_vdl as $key => $file ) {
  if ($file['view']) {
       print '<tr><td>'.$node->field_lien_utile_vdl[$key]['view'].'<hr class="ombrage_bas"/></td></tr>';
    }
} ?>
       </tbody>
</table>
 <?php endif; ?>