<!-- ______________________ NODE-PAGE_POLE.TPL _______________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    
       <?php if ($title): ?>
<div class="titre-flex"><h1 class="title-page-bloc"><?php print $title; ?></h1></div>
              <?php endif; ?>
    
  <div class="node-inner conteneur-flex">
 
    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>
<!-- ______________________ PARTIE CUSTOMISEE _______________________ -->
               
<!-- ______________________ BLOC GAUCHE _______________________ -->
<div id="bloc-gauche-pole" class="page-pole layoutflex_3col_all4">
                  <?php print $pole_bloc_G; ?>
              </div>
<!-- ______________________ BLOC CENTRE _______________________ -->
              <div id="bloc-centre-pole" class="page-pole layoutflex_3col_all4">
                  <?php print $pole_bloc_C; ?>
              </div>
<!-- ______________________ BLOC DROIT _______________________ -->
              <div id="bloc-droit-pole" class="page-pole layoutflex_3col_all4last">
                  <?php print $pole_bloc_D; ?>
              </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->