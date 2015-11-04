<?php
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php print $field->content; ?>
<?php print $fields['field_galerie_image_vdl_fid']->content ['uri']; //affiche un second diapo?>
<?php print $view->field['field_galerie_image_vdl_fid']->advanced_render($row); //affiche un 3eme diapo ?>
<?php 
//$field_galerie_image_vdl = field_get_items('node', $node, 'field_galerie_image_vdl'); 
// $image_url = file_create_url($field_video_image[0]['uri']);  
// print $image_url;
 ?>
 <?php foreach ($row->field_galerie_image_vdl_fid as $img) : ?>
        
        <?php $img_medium = image_style_url('Site-CE-480x350-flexslider', $img['raw']['uri']); ?>
        
        <a class="cloud-zoom-gallery <?php ($count == 0)? print ' selected ': NULL; ?>" 
           
           data-thumb="<?php print $img_medium; ?>'" 
           href ="<?php print $img_medium; ?>">
            <span class="vs-thumb">
              <?php print $img_medium; ?>
            </span>
        </a>
        <?php $count ++; ?>
      <?php endforeach; ?>
  <?php print $field->wrapper_suffix; ?>
<?php endforeach; ?>

<?php
global $theme_path;
include ($theme_path . '/includes/inc_drupal_debug_views.php');
?>