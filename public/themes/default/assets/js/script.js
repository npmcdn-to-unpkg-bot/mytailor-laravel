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

                $('#grid').infinitescroll({
                  navSelector     : ".pagination",
                  nextSelector    : ".pagination li.active + li a",
                  itemSelector    : ".grid-item",
                  debug           : true,
                  dataType        : 'html',
                  path: function(index) {
                      return "?page=" + index;
                  }
              }, function(newElements, data, url){

                  var $newElems = $( newElements );
                  $('.grid').masonry( 'appended', $newElems, true);

              });

                //========== Search icon on small devices ==========
                    //   $('.mt-toggle-search').click(function() {
             
                    //          if ($(this).children().first().attr('data-type') == 'search') {
                    //               $('.pull-left').hide();
                    //             $(this).children().first().attr('data-type', 'close');
                    //             $(this).find('.icon-center').removeClass('mdi-magnify');
                    //             $(this).find('.icon-center').addClass('mdi-close-circle');
                    //             $('.mt-search-wrapper').removeClass('hide-on-phone');
                               

                    //   }
                    //    // Search bar is currently showing
                    //   else {
                    //       $('.pull-left').show();
                    //       $(this).children().first().attr('data-type', 'search');
                    //       $('.mt-search-wrapper').addClass('hide-on-phone');
                    //       $(this).find('.icon-center').removeClass('mdi-close-circle');
                    //       $(this).find('.icon-center').addClass('mdi-magnify');
                    //   }
                    // });
              	//=========== Shots clicky ==========

                  	  $('.shot-item>a').click(function() {

                          var item = $(this).parent();

                          if(!item.hasClass('__active')){
                          	  item.addClass('__active')
                                 .siblings()
                                 .removeClass('__active')
                          }
                	    });

                      // hmm
                       $('#see-more').click(function() {
                          $(".mt-load-bar").show();
                          return false;
                       });


                  //========== Page ==========

                      // switch (id) {
                          
                      //   case 'home':

                      //     var $bar = $('my-header'),
                      //       $items = $('#items');

                      //        if ($header.hasClass('normal')
                      //               &&  $banner.length > 0) {

                      //                 $window.on('load', function() {
                      //                   $banner.scrollwatch({
                      //                     delay:    0,
                      //                     range:    0.5,
                      //                     anchor:   'top',
                      //                     on:     function() { $header.addClass('mt-header show').removeClass('mt-header-animate'); },
                      //                     off:    function() { $header.removeClass('show').addClass('mt-header-animate'); }
                      //                   });

                      //                 });

                      //               }

                      //         break;
                      // }


        });
        
      
                  // $('.mt-search-wrapper input[type="search"]').keyup(function() {
                  //    if( $(this).val() ) {
                  //     $('#search-form').delay(200).submit();
                  //   $('.mt-search-result-wrapper').show();
                  //   $('.pageContainer').hide();

                  // } else{
                  //     $('.mt-search-result-wrapper').hide();
                  //   $('.pageContainer').show();
                  // }

                  // });

                  // $("#search-form").submit(function (event) {
                  //     event.preventDefault();

                  // });

    
        //Initializa all plugins
        $window.on('load', function(){

                  //Waves Buttons
                    Waves.attach('.btn', ['waves-button', 'waves-float']);
                    Waves.init();

                  $('.grid').masonry({
                  // options
                    columnWidth: '.grid-item',
                    itemSelector: '.grid-item'

                    });
              });
})(jQuery);