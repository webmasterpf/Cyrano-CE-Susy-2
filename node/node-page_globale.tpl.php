<!--______________NODE TPL POUR PAGE GLOBALE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner conteneur-flex">
        <!--______________COLONNE 1________________ -->

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                
               <?php if ($node->field_vue_globale[0]): ?>
        <div class="vue-globale">
                   <?php  print $node->field_vue_globale[0]['view'] /*Vue actus du lycée*/ ?>
        </div>
           <?php endif;?> 
                
                
            </div>

        </div>



        </div>

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->