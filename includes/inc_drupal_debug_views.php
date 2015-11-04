  <?php
  
  /*Pour débugger et modifier les tpl de views
à commenter quand site en prod,permet debug durant dev
     */
print '<h2>Les Valeurs de $data </h2>';
print '<pre>'.print_r($data, TRUE).'</pre>';
print '<h2>Les Valeurs de $row </h2>';

print '<pre>'.print_r($row, TRUE).'</pre>';
print '<h2>Les Valeurs avec Devel </h2>';
dsm(get_defined_vars());
print '<h2>Les Valeurs avec Devel $fields</h2>';
dsm(array_keys($fields));

         ?>