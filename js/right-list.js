  (function($) {
     $(document).ready(function() {

        var toggle = function(clickedElement) {
           var checkElement = clickedElement.next();
           if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
              checkElement.slideUp('easing', function() {
                 clickedElement.children('i').toggleClass('fa-rotate-90');
              });
           }
           if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
              checkElement.slideDown('easing', function() {
                 clickedElement.children('i').toggleClass('fa-rotate-90');
              });
           }
           if ($(this).closest('li').find('ul').children().length == 0) {
              return true;
           } else {
              return false;
           }
        };

        //Handle the click
        $('.equipment-list > div > h4').click(function() {
           var clickedElement = $(this);
           toggle(clickedElement);
        });

        // Expand the active one
        toggle($('.equipment-list > div > ul > li.active').parent().prev());

     });
  })(jQuery);