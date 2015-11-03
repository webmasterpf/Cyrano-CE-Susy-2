<?php
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<?php print $wrapper_prefix; ?>
  <?php if (!empty($title)) : ?>
    <h3><?php print $title; ?></h3>
  <?php endif; ?>
  <?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
      <li class="<?php print $classes[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
  <?php print $list_type_suffix; ?>
  <div id="bx-pager">
  <?php for ($i=0;$i<count($rows);$i++): ?>
  <a data-slide-index="<?php print $i; ?>" href="">
      <img src="<?php print $row->field_galerie_image_vdl_fid_1 [0]['filepath']; ?>"/></a>
  <?php endfor; ?>
  </div>
<?php print $wrapper_suffix; ?>
