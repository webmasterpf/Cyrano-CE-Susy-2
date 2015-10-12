<!--______________NODE TPL POUR TdC PAGE ACTUALITE GLOBALE CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner conteneur-flex">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="colonne-1" class="page-actualites col1_layoutflex_3_6_3">
  
  
 <?php
 /* inclusion d'une region pour bloc dans colonne de gauche*/
              $theme_path = drupal_get_path('theme', 'd6_ce_susy2');
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>

        
       
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="page-actualites col2_layoutflex_3_6_3">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
      
         <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>
     <?php endif; ?>
    <?php
    
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>
              <?php
                  $theme_path = drupal_get_path('theme', 'd6_ce_susy2');
                  include ($theme_path.'/includes/inc_actus_globale.php');
                  ?>
      
      <?php
              $theme_path = drupal_get_path('theme', 'd6_ce_susy2');
              include ($theme_path.'/includes/inc_region_col_2.php');
              ?>
    
</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="colonne-3" class="page-actualites col3_layoutflex_3_6_3">
     <?php print $picture; ?>

   

   

        <?php
                  $theme_path = drupal_get_path('theme', 'd6_ce_susy2');
                  include ($theme_path.'/includes/inc_actus_bloc_rp.php');
                  ?>
        
          <?php
              $theme_path = drupal_get_path('theme', 'd6_ce_susy2');
              include ($theme_path.'/includes/inc_region_col_3.php');
              ?>
          
    

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