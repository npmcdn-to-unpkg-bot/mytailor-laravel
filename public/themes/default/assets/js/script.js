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
               //========== Infinite Scroll & Masonry ==========
                $('#grid').infinitescroll({
                  navSelector     : ".pagination",
                  nextSelector    : ".pagination li.active + li a",
                  itemSelector    : ".grid-item",
                  debug           : false,
                  dataType        : 'html',
                  pixelsFromNavToBottom: 500,
                  loading: {
                        speed: 'fast',
                        finished: function() {
                            console.log('Finished');
                      }
                    }
              }, function(newElements, data, url){
                            var $newElems = $( newElements ),
                            $target = $(".grid");
                            $newElems.hide();

                  $('.grid').imagesLoaded(function(){

                               angular.element($target).injector().invoke(function($compile){
                                var $scope = angular.element($target).scope();
                                    $compile($newElems)($scope);
                                    $scope.$apply();

                               });
                        $newElems.show();
                        $('.grid').masonry( 'appended', $newElems, 'reloadItems');

     
                    });
                  

              });

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



        search = instantsearch(options);

          search.addWidget(
            instantsearch.widgets.searchBox({
              container: '#search-box',
              placeholder: 'search for items like men, women, shirts, shoes and more ...'
            })
          );
            search.start();

                
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
        
      
    
        //Initializa all plugins
        $window.on('load', function(){

                  //Waves Buttons
                    Waves.attach('.btn', ['waves-button', 'waves-float']);
                    Waves.init();

                    //wow
                    new WOW().init();

                  $('#grid').masonry({
                  // options
                    columnWidth: '.grid-item',
                    itemSelector: '.grid-item'

                    });

            //RevSlider


          var tpj=jQuery;         
          var revapi48;
            if(tpj("#rev_slider_48_1").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_48_1");
            }else{
              revapi48 = tpj("#rev_slider_48_1").show().revolution({
                sliderType:"standard",
                jsFileLocation:"../../revolution/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"off",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "vertical",
                    drag_block_vertical: false
                  }
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[868,768,960,720],
                lazyType:"none",
                shadow:0,
                spinner:"off",
                stopLoop:"on",
                stopAfterLoops:0,
                stopAtSlide:1,
                shuffle:"off",
                autoHeight:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }

              });
})(jQuery);