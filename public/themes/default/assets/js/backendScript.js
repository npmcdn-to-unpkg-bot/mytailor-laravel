/*********************************************************************************************

Mytailor.me

*********************************************************************************************/

(function($) {

    // Global variables

        var $body = $('body'),
            $window = $(window),
            id = $('.pageContainer').attr('id'),
            $header = $('.mt-header'),
            $banner = $('.hero-viewport');

        $(function() {
               
                //========== Search icon on small devices ==========
                      $('.mt-toggle-search').click(function() {
             
                             if ($(this).children().first().attr('data-type') == 'search') {
                                  $('.pull-left').hide();
                                $(this).children().first().attr('data-type', 'close');
                                $(this).find('.icon-center').removeClass('mdi-magnify');
                                $(this).find('.icon-center').addClass('mdi-close-circle');
                                $('.mt-search-wrapper').removeClass('hide-on-phone');
                      }
                // Search bar is currently showing
                      else {
                          $('.pull-left').show();
                          $(this).children().first().attr('data-type', 'search');
                          $('.mt-search-wrapper').addClass('hide-on-phone');
                          $(this).find('.icon-center').removeClass('mdi-close-circle');
                          $(this).find('.icon-center').addClass('mdi-magnify');
                      }
                    });
              	//=========== Shots clicky ==========
                  	  $('.shot-item>a').click(function() {

                          var item = $(this).parent();

                          if(!item.hasClass('__active')){
                          	  item.addClass('__active')
                                 .siblings()
                                 .removeClass('__active')
                          }
                	    });

                  //========== Tagging System ==========

        var options = {
          appId : 'RQO4LL16TO',
          apiKey : '53a754b22aa63d7a38a04c9ee76f596a',
          indexName : 'instant_search',
          urlSync: true
        }




        });
    
        //Initializa all plugins
        $window.on('load', function(){

                  //Waves Buttons
                    Waves.attach('.btn', ['waves-button', 'waves-float']);
                    Waves.init();

              });
})(jQuery);