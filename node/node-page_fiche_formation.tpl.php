<!--______________NODE TPL POUR FICHE FORMATION CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->

<div id="colonne-1" class="col1_layout_3_3_6 fiche-formation">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_fiche"><?php print $title; ?></h1>
     
    <?php endif; ?>
      <br class="clearBoth"/>
       <!-- Diapo deco fiche formation -->
    <?php
global $theme_path;
include ($theme_path.'/includes/inc_field_diapo_fiche_flash.php');
?>
        <br class="clearBoth"/>
 <?php
 /* inclusion d'une region pour bloc dans colonne de gauche*/
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="col2_layout_3_3_6 fiche-formation">
    <?php
global $theme_path;
include ($theme_path.'/includes/inc_formation_table_fiche.php');
?>
    
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="colonne-3" class="col3_layout_3_3_6 fiche-formation">
     <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <div class="content">
     <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?>
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

</div>
   
  </div> <!-- /node-inner -->
</div> <!-- /node-->
<!--______________FIN NODE TPL CUSTOM________________ -->
 <?php print_r();?>