(function ($) {
  Drupal.behaviors.myModule = function(context) {
    var externalScript1 = $('<script></script>').attr('type','text/javascript').attr('src', 'http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js');
    $('body').append(externalScript1);
    var externalScript1map = $('<script></script>').attr('type','text/javascript').attr('src', 'http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.map');
    $('body').append(externalScript1map);
    var externalScript2 = $('<script></script>').attr('type','text/javascript').attr('src', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js');
    $('body').append(externalScript2);
      }
}(jQuery));