<?php
global $theme_path;
include ($theme_path.'/includes/inc_header.php');
?>

<!-- ______________________ LAYOUT HOMEPAGE HORIZONTAL _______________________ -->
<!--  ______________________ CONTENU _______________________ -->

          <?php if ($content_top): ?>
            <div class="content-top">
              <?php print $content_top; ?>
            </div>   <!--  /content-top -->
          <?php endif; ?>

<!--    ______________________ ZONE DIAPO _______________________ -->
			
              <?php if ($DiapoPanoHP): ?>
                 <div class="HPDiapo"><?php print $DiapoPanoHP; ?></div>
              <?php endif; ?>
        

 <!--______________________ PARTIE BAS GAUCHE _______________________ -->
                 <?php if ($HPBasGauche): ?>
                 <div class="HPBasGauche"><?php print $HPBasGauche; ?></div>
              <?php endif; ?>  
		 
 <!--______________________ PARTIE BAS DROITE _______________________ -->
   
        <?php if ($HPBasDroit): ?>
     <div class="HPBasDroit"><?php print $HPBasDroit; ?></div>
        <?php endif; ?>

 <!--______________________ FIN LAYOUT PAGE _______________________ -->
	
		<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($content_bottom_home): ?>
    <div class="content-bottom-home">
      <?php print $content_bottom_home; ?>
        <?php //print $feed_icons; ?>
         <?php endif; ?>


    </div><!-- /#content-bottom -->
        <?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>