<!--______________NODE TPL POUR TdC PAGE SORTIE ACTIONS CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
   <div class="node-inner conteneur-flex">
<!--______________COLONNE GAUCHE 1________________ -->

<div id="colonne-1" class="col1_layout_3_6_3 contenu-vdl">
    
      
       <!-- Table pour infos en plus -->
        <?php
global $theme_path;
include ($theme_path.'/includes/inc_vdl_table_infos_plus.php');
?>

 <?php
 /* inclusion d'une region pour bloc dans colonne de gauche*/
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
   
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="col2_layout_3_6_3 contenu-vdl">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
      
       <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_vdl_sortie"><?php print $title; ?></h1>
     
    <?php endif; ?>
      
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value'];
      ?>
     <?php if (!empty($node->field_choix_galerie_vdl[0]['view'])): ?>
        <div id="bloc-galerie-vdl">
           <?php  print $node->field_choix_galerie_vdl[0]['view'] /*Vue actus du lycée*/ ?>
        </div>
           <?php endif;?>

    
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="colonne-3" class="col3_layout_3_6_3 contenu-vdl">
     <?php print $picture; ?>

   

    
        <div id="bloc-autres-vdl">

    <?php
    
global $theme_path;
include ($theme_path.'/includes/inc_vdl_autres_evenements.php');

     ?>

   </div>


         <?php if ($node->field_vue_autres_vdl[0]['view']): /*Affichage conditionnel du bloc Autres sorties*/?>
        <div id="bloc-autres-vdl">
                <?php  print $node->field_vue_autres_vdl[0]['view']; /*Autres sorties selon taxo type de vdl*/ ?>
        </div>
        <?php endif;?>


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