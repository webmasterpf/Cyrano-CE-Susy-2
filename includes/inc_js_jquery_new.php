<script>
 /*
 * Pour pouvoir utiliser plusieurs versions de Jquery : https://www.drupal.org/node/1058168
 * Utiliser jQjQuery normalement.
 * Trés bonne explication sur action du noConflict() : 
 * http://sundropsoftware.com/how-to-use-jquery-noconflict-the-right-way/
 */


jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide"
  });
});

 
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
<script>
jQuery(document).ready(function() {
  var $masonryContainer = $('.content-page-globale');

  $masonryContainer.masonry({
    columnWidth: '.masonry__column',
    gutter: '.masonry__gutter',
    itemSelector: '.masonry__item,.masonry--item'
  });
});
</script>