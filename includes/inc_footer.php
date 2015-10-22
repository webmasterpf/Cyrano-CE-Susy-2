<!-- ______________________ FOOTER _______________________ -->
      <?php if(!empty($footer_message) || !empty($footer_block)): ?>
<footer id="footer">
          <?php print $footer_message; ?>
          <?php print $footer_block; ?>
     <div id="bloc_stats">
         <p>V&eacute;rifier les codes pour les stats</p>
      <?php
global $theme_path;
include ($theme_path.'/js/code_stats.php');
?>
     </div>
</footer> <!-- /footer -->
      <?php endif; ?>
       
    </section> 
    <!-- ______________________ /CONTENEUR _______________________ -->
           <?php 
           global $theme_path;
         // include ($theme_path.'/includes/inc_js_responsivenav.php'); inutile,deja dans header
           include ($theme_path.'/js/jquery-lib-online.php');
           include ($theme_path.'/includes/inc_js_masonry.php');
          //include ($theme_path.'/includes/inc_drupal_debug.php');
           ?>
    
    
	<?php print $closure ?>
   
  </body>
</html>