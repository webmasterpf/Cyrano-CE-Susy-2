<?php
/* 
 * Permet d'avoir un template spécial pour le webform
 * NODE-WEBFORM.TPL GENERIK si besoin possible faire theme pour webform selon node-webform-NID.tpl.php
 */

?>
<!-- NODE-WEBFORM.TPL GENERIK -->
<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
   
     <!--______________COLONNE GAUCHE 1________________ -->
  
     <div id="colonne-1" class="col1_layout_10_2 contact">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>

    <?php endif; ?>
       <table>
    <tr>
    <td><?php print $node->content['body']['#value']; ?></td>
    </tr>
    <tr>
    <td><?php print $node->content['webform']['#value']; ?></td>
    </tr>
    </table>
      
 <?php
 /* inclusion d'une region pour bloc dans colonne de gauche*/
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="col2_layout_10_2 contact">
     <?php if ($submitted) { ?>
    <span class="submitted"><?php print $submitted?></span>
  <?php }; ?>

 

  <div class="content">
   <!-- Deco page-->
  <?php
       if (!empty($node->field_image_deco_lycee[0])):
           print "<span class=".$node->content['field_image_deco_lycee']['field']['#field_name'].">".$node->field_image_deco_lycee[0]['view'].'</span>
               <br class="clearBoth"/>'; /* Image deco page lycee */
       
       endif;
              ?>
      
      <?php if ($node->field_vue_actus_lycee[0]['view']): ?>
        <div id="bloc-actu-lycee">
           <?php  print $node->field_vue_actus_lycee[0]['view'] /*Vue actus du lycée*/ ?>
        </div>
           <?php endif;?>
      
  </div>

    <?php if ($links): ?>
    <div class="links">&raquo; <?php print $links; ?></div>
  <?php endif; ?>

     <?php if ($terms) { ?>
    <span class="taxonomy"><?php print $terms?></span>
  <?php }; ?>
<?php if ($picture) { print $picture; }?>

  <?php if ($page == 0) { ?>
    <?php if ($title) { ?>
      <h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2>
    <?php }; ?>
  <?php }; ?>
</div>

<div class="clear-block clear"></div>

</div><!-- /node -->