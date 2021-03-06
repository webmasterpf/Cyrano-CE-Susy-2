<html>
    <h2> SNIPPETS PHP POUR DIVERS USAGES DANS TPL OU INCLUDES </h2>
</html>

    <?php
                    /* 06/2015 Liste les fichiers à partir du tableau créé
                     * création d'une liste dynamique 
                     */
                    if (!empty($node->field_NAME[0]['view'])): ?>
                <div class="CLASS_NAME">
               <?php  //récupération du nom du champ
               print $node->content['field_NAME']['field']['#title'] ?>
                    <ul>
               <?php
               foreach ($node->field_NAME as $key => $lien) {
                    print '<li>'.$node->field_NAME[$key]['view'].'</li>';
               }
               ?>  
                  </ul>   </div>
            <?php endif;?>

<?php //mise en forme tableau (à finaliser)
if (!empty($node->field_NAME[0]['view'])): ?>
<table  class="CLASS_NAME">
  <?php if (!empty($title)) : ?>
    <caption><?php print $title; ?></caption>
  <?php endif; ?>
  <thead>
    <tr>
      <?php foreach ($header as $field => $label): ?>
        <th class="table-head-<?php print $fields[$field]; ?>">
          <?php print $label; ?>
        </th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rows as $count => $row): ?>
      <tr <?php print implode(' ', $row_classes[$count]); ?>">
        <?php foreach ($row as $field => $content): ?>
          <td class="champs-<?php print $fields[$field]; ?>">
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif;?>

 <?php //utiliser nom d'un champ comme classe dynamique
       if (!empty($node->field_image_deco_lycee[0])):
           print "<span class=".$node->content['field_image_deco_lycee']['field']['#field_name']."/>".$node->field_image_deco_lycee[0]['view'].'</span>'; /* Image deco page lycee */
       endif;
       ?>

<?php
// INLCUSION D'UNE VUE AVEC ARGUMENTS (Filtre dynamique)
                $viewname = 'liste_autres_vdl';
                $view = views_get_view ($viewname);
                $viewdisplay = $view->set_display('block_1');

//vid = 4 , type d'evenement pour site en prod
                $lesVid=array('4');

// on recupere le vid (taxonomie) et l'on verifie si c'est celui voulu
                if ( !empty($node->taxonomy)  ) {
// Récupération du 1er element du tableau
                    $term = array_shift($node->taxonomy);
                    // verifie si l'un des termes appartiennent bien à l'un des vid définis dans le tableau
                    if ( in_array($term->vid,$lesVid) ) {
                        $args = $term->tid;
                        $view->set_arguments($args);
                        //debugage
                        drupal_set_message('VID vocabulaire: '.$term->vid.' et le terme id : '.$term->tid,'status');
                        drupal_set_message('Vue utilisé: '.$viewname,'status');
                        $output = '<div id="ac"><h3>'.$view->get_title().'</h3>' .$view->preview($viewdisplay, $args).'</div>';
                        drupal_set_message('Argument pour la vue : tid '.$args.'/ nid '.$node->nid,'status');
                        drupal_set_message('Vue sortie des valeurs avant affichage : '.$output,'status');
                        if (!empty($view->result)) {
                            print $output;
                            drupal_set_message('Vue sortie des valeurs: '.$output,'status');
                        }
                    }
                }
                
                ?>