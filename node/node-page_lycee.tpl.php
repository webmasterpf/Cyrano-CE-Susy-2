<!--______________NODE TPL POUR TdC PAGE LYCEE CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="colonne-1" class="page-lycee col1_layout_3_6_3">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>
     
    <?php endif; ?>
      <br class="clearBoth"/>
       <!-- Deco page-->
    <?php  print $node->field_image_deco_lycee[0]['view'] /*Image deco page lycee*/ ?>
<br class="clearBoth"/>
 <?php
 /* inclusion d'une region pour bloc dans colonne de gauche*/
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="page-lycee col2_layout_3_6_3">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>
     
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="colonne-3" class="page-lycee col3_layout_3_6_3">
     <?php print $picture; ?>

   

    <div class="content">

       
   <?php //inclusion de la vue Docs joints
global $theme_path;
include ($theme_path.'/includes/inc_lycee_docs_joints.php');
?>
        
        <br class="clearBoth"/>
           <?php if ($node->field_vue_actus_lycee[0]['view']): ?>
        <div id="bloc-actu-lycee">
           <?php  print $node->field_vue_actus_lycee[0]['view'] /*Vue actus du lycée*/ ?>
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