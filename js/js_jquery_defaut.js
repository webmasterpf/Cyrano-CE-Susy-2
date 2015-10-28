/*
 * Plugin Jquery qui utilisent la version de base fournie par Drupal
 * jquery update 1.3.2
 */
(function ($) {
//<!--Pour utiliser selectnav en RWD-->
    jQuery(document).ready(function () {
//        console.log('Dans la boucle Defaut :  Version de jquery utilisée pour les plugins :' + jQuery111().jquery +
//            ' -- Version de Jquery pour var $ :' + $.fn.jquery +
//            ' -- Version de Jquery pour var jQuery :' + jQuery().jquery+
//            ' -- Version de Jquery pour var jQuery111 :' + jQuery111().jquery
//            );

        selectnav('subnav', {label: '- Accès rapide -'});

        $("#header").sticky({topSpacing: 10});





    });

//OffCanvas avec fonction anonyme

    var $transformer = $('.transformer'),
            $menuToggle = $('.menu-toggle');
    $('.menu-toggle').on('click', function (event) {
        event.preventDefault();
        $transformer.toggleClass('is-open');
    });

    $('.close-btn').on('click', function (event) {
        event.preventDefault();
        console.log('bouton referme volet fonctionne !');
        $transformer.removeClass('is-open');
    });


    //Pour enlever la taille des images sur les Gallery Formatter
    jQuery(document).ready(function () {

        jQuery('#bloc-galerie-vdl .gallery-slides').each(function () {
            //jQuery(this).removeAttr('width')
            //jQuery(this).removeAttr('height');
            jQuery(this).attr("style", "width:25em;height:22em;");
        });

    });
})(jQuery);