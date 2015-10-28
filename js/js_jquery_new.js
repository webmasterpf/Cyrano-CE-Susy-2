 /*
 * Pour pouvoir utiliser plusieurs versions de Jquery : https://www.drupal.org/node/1058168
 * Utiliser jQuery normalement.
 * Trés bonne explication sur action du noConflict() : 
 * http://sundropsoftware.com/how-to-use-jquery-noconflict-the-right-way/
 */

(function($){
//jQuery(window).load(function()
jQuery(document).ready(function() 
 {
//     console.log('Dans la boucle Defaut :  Version de jquery utilisée pour les plugins :' + jQuery111().jquery +
//            ' -- Version de Jquery pour var $ :' + $.fn.jquery +
//            ' -- Version de Jquery pour var jQuery :' + jQuery().jquery+
//            ' -- Version de Jquery pour var jQuery111 :' + jQuery111().jquery
//            );
  console.log('jQuery dans la fonction Flexslider');  
  jQuery('.flexslider').flexslider({
          animation: "slide"
  });
});

 
jQuery(document).ready(function() {
  var $masonryContainer = $('.content-page-globale');

  $masonryContainer.masonry({
    columnWidth: '.masonry__column',
    gutter: '.masonry__gutter',
    itemSelector: '.masonry__item,.masonry--item'
  });
});
})(jQuery);