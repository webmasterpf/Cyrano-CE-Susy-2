<!--______________NODE TPL POUR TdC PAGE VDL LISTE CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
<div id="colonne-1" class="col1_layout_3_6_3 contenu-vdl vdl-liste">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_vdl"><?php print $title; ?></h1>
     
    <?php endif; ?>
              <?php
              /*Region pour bloc dans colonne de G*/
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
      
       <!-- Deco page-->
    <?php if (!empty($node->field_image_deco_lycee[0])):
    print $node->field_image_deco_lycee[0]['view']; /*Image deco page lycee*/ 
    endif; 
    ?>
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="col2_layout_3_6_3 contenu-vdl vdl-liste">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value'];
      print $node->field_vue_liste_vdl[0]['view'];/*Les vdl archives et en cours*/
     /*Pour les termes Sortie : 15 - Europe : 13 - Partenaires : 14 */
      ?>

</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="colonne-3" class="col3_layout_3_6_3 contenu-vdl vdl-liste">
     <?php print $picture; ?>

   

    <div class="content">

       

           <?php if ($node->field_actu_lycee_vdl[0]['view']): ?>
        <div id="bloc-actu-lycee">
                   <?php  print $node->field_actu_lycee_vdl[0]['view'] /*Vue actus du lycée*/ ?>
        </div>
           <?php endif;?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php //print $links; ?></div>
    <?php endif; ?>

</div>
   

  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->