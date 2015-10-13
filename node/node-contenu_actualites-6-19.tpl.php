<!--______________NODE TPL POUR TdC PAGE CONTENU ACTUALITE CUSTOM ANNONCE ________________ -->
<?php //tpl pour node tagger comme Annonce ponctuelle (dev=tid:16 vid:5) (prod= vid:6 tid:19)?>
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
 <div class="node-inner conteneur-flex">
<!--______________COLONNE GAUCHE 1________________ -->
  <!-- <pre> <?php print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
<div id="colonne-1" class="col1_layoutflex_3_6_3 contenu-actu">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>
     <?php endif; ?>
   <br class="clearBoth"/>
     <!-- infos en plus-->
   <?php
   global $theme_path;
   include ($theme_path.'/includes/inc_actus_liste_docs.php');
   ?>
 <br class="clearBoth"/>
                  <?php
 /* inclusion d'une region pour bloc dans colonne de gauche*/
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>

        
       
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="colonne-2" class="col2_layoutflex_3_6_3 contenu-actu">
     <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
    <?php
     /*insertion du contenu du corps de la page*/
      print $node->content['body']['#value']
      ?>
         <br />
          <?php
                  global $theme_path;
                  include ($theme_path.'/includes/inc_choix_galerie_vdl_actu.php');
                  ?>
      <br/>
 <?php
                  global $theme_path;
                  include ($theme_path.'/includes/inc_actus_video.php');
                  ?>
      
      <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_2.php');
              ?>

</div>
<!--______________COLONNE GAUCHE 3________________ -->
   
<div id="colonne-3" class="col3_layoutflex_3_6_3 contenu-actu">
     <?php print $picture; ?>

   

    <div class="content">

        <?php
                  global $theme_path;
                  include ($theme_path.'/includes/inc_actus_bloc_rp.php');
                  ?>
        
        <br class="clearBoth"/>
          
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