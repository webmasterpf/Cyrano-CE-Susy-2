  <?php
  
  /*listage des variables du $content 
à commenter quand site en prod,permet debug durant dev
     */
print '<h2>Les Valeurs de $node </h2>';
  print '<pre>'.print_r($node, TRUE).' </pre>';
print '<h2>Les Valeurs de $data </h2>';
print '<pre>'.print_r($data, TRUE).'</pre>';
print '<h2>Les Valeurs de $row </h2>';
print '<pre>'.print_r($row, TRUE).'</pre>';
print '<h2>Les Valeurs avec Devel </h2>';
print '<pre>'.dsm(get_defined_vars()).'</pre>';

         ?>