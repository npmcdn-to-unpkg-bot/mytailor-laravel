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
              	//=========== Side Bar ==========

                    //Open
                  	  $('a.sideTrigger').click(function() {

                          	$('body').toggleClass('sideOpen');
                            $('.mt-layout-black__cover').addClass('is-visible');

                	    });

                	  // Close
                	    $('a.closeTrigger'), $('.mt-layout-black__cover').click(function() {

          		              $('body').removeClass('sideOpen');
                            $('.mt-layout-black__cover').removeClass('is-visible'); 
                	    });

                       $('#see-more').click(function() {
                          $(".mt-load-bar").show();
                          return false;
                       });

/**
   * Dropdown menu and all its functions.
   *
   *
   * @functions : Opens, closes the menu 
   * @Events : listens for clicks on the trigger $dropper.
   */


                 var $menu = $('#m9menu');

                     $('#dropdown').on('click', function () {

                          if ( $(this).children().first().attr('data-type') == 'hidden'){
                               $menu.dropIt($(this));

                               $('html').click(function() {

                                    $menu.closeIt($('#dropdown'));   //Hide the menus if visible

                                });



                          }else{

                               $menu.closeIt($(this));

                          }

                      }); 




                                              $('#dropdown').click(function(event){
                            event.stopPropagation();
                          });
/*
* DropIt() will toggle the menu and changes the
* data-'type' attribute of the trigger to visible
*
* @params
*/

                  $menu.dropIt = function ($dropper) {

                      $menu.addClass('is-visible showMenu');
                      $dropper.children().first().attr('data-type', 'visible');
                
                  };

/*
* CloseIt() will toggle the menu and changes the
* data-'type' attribute of the trigger to hidden
*
* @params
*/
                $menu.closeIt = function ($dropper){

                      $menu.removeClass('is-visible showMenu');
                      $dropper.children().first().attr('data-type', 'hidden');
                };


                //========== sp Overlay ==========


                      $(document).on('click', '.sp-view', function() {
                              var shot_img = $(this)
                                    .parent()
                                    .find('a')
                                    .attr('href'),

                                  shot_img_location = $(this)
                                    .first()
                                    .find('img')
                                    .attr('src');
                                  $current_shot = $(this);
                                  incr_view(shot_img);

                                  if($(window).width() > 768){
                                  $sp_overlay.mt_OpenOval(shot_img_location, shot_img);
                                     return false;
                                }

                                 

                            });

                      $('#next').click(function() {
                            var $next_shot = getNext($current_shot);
                                loadshot($next_shot);
                      });

                      $('#prev').click(function() {
                            var $prev_shot = getPrev($current_shot);
                                loadshot($prev_shot);
                      });


                      function getNext(current) {
                               $next = current.parent().parent().next();
                                 if ($next['length'] > 0) {
                                    return $next;
                                 };
                              

                          }


                          function getPrev(current) {
                            $prev = current.parent().parent().prev();
                            if ($prev['length'] > 0) {
                                return $prev;
                             };
                          

                          }



                          //vars
                            var $sp_overlay = $('.sp-overlay'),
                                $sp_overlay_box = $sp_overlay.find('.sp-content-box'),
                                offsetY = window.pageYOffset;
                            
                            // Close overlay on click
                                $sp_overlay
                                    .hide()
                                    .appendTo($body)
                                    .click(function() {
                                        $sp_overlay.mt_CloseOval();
                                        return true;

                                    });

                            // stop box click from closing overlay
                                $sp_overlay_box
                                    .click(function(e){ 
                                      e.stopPropagation(); 
                                    });
                            // Esc to close overlay
                            $(document).keyup(function(e) {

                                  if (e.keyCode == 27){
                                    $sp_overlay.mt_CloseOval();

                                    } else if(e.keyCode == 39) {

                                        var $next_shot = getNext($current_shot);
                                        loadshot($next_shot);

                                    } else if (e.keyCode == 37) {

                                        var $prev_shot = getPrev($current_shot);
                                        loadshot($prev_shot);

                                      };
                                });


                            //=====Open Overlay
                            $sp_overlay.mt_OpenOval = function(image, name) {
                                      $('.sp-cover>img').attr('src', image);
                                      $body.css({'position': 'static','top': -offsetY + 'px', 'overflow-y': 'hidden'});
                                          $sp_overlay
                                          .fadeTo('fast', 1.0, function() {
                                                $sp_overlay.show();
                                                history.pushState({}, '', name);
                                            });

                                      //listen for back button
                                          window.addEventListener('popstate', function(event) {
                                                $sp_overlay.mt_CloseOval(false);


                                          });
                            };

                             $sp_overlay.new_shot = function(image, name) {
                              $('.sp-cover>img').attr('src', image);
                             };

                            //=====Close Overlay
                            $sp_overlay.mt_CloseOval = function(bTrigger) {
                                       $body.css({'position': 'static', 'overflow-y': 'auto'});
                                       $(window).scrollTop(offsetY);

                                       if (bTrigger != false) {
                                              history.back();
                                          };
                                          if (!$sp_overlay.is(':visible'))
                                              return false;
                                                $sp_overlay.fadeTo('fast', 0, function() {
                                                    $sp_overlay.hide();
                                            });
                            };

                            function incr_view (image) {
                              $.ajax({ url: 'img-views.php',
                                     data: {"image": image},
                                     type: 'post',
                                     success: function() {
                              
                                    }
                                  });
                            }

                            function loadshot (shot){
                              if (shot) {
                                  var shot_img = (shot)
                                    .parent()
                                    .find('a')
                                    .attr('href'),

                                  shot_img_location = (shot)
                                    .first()
                                    .find('img')
                                    .attr('src');
                                  $current_shot = (shot.find('.sp-view'));
                                  incr_view(shot_img);
                                  $sp_overlay.new_shot(shot_img_location, shot_img);

                              }
                              return false;
  
                            }


                  //========== Page ==========

                      switch (id) {
                          
                        case 'home':

                          var $bar = $('my-header'),
                            $items = $('#items');

                             if ($header.hasClass('normal')
                                    &&  $banner.length > 0) {

                                      $window.on('load', function() {
                                        $banner.scrollwatch({
                                          delay:    0,
                                          range:    0.5,
                                          anchor:   'top',
                                          on:     function() { $header.addClass('mt-header show').removeClass('mt-header-animate'); },
                                          off:    function() { $header.removeClass('show').addClass('mt-header-animate'); }
                                        });

                                      });

                                    }

                              break;
                      }


        });
      
                        $('.mt-search-wrapper input[type="search"]').keyup(function() {
                     if( $(this).val() ) {
                      $('#search-form').delay(200).submit();
                    $('.mt-search-result-wrapper').show();
                    $('.pageContainer').hide();

                  } else{
                      $('.mt-search-result-wrapper').hide();
                    $('.pageContainer').show();
                  }

                  });

                  $("#search-form").submit(function (event) {
                      event.preventDefault();

                  });




    
             //Initializa all plugins
               $window.on('load', function(){
                  //Waves Buttons
                    Waves.attach('.btn', ['waves-button', 'waves-float']);
                    Waves.init();
            //       //Scroller
            //         $(".--scroll").mCustomScrollbar();

            //         var $grid = $('.grid').masonry({
            //       // options
            //         columnWidth: '.grid-item',
            //         itemSelector: '.grid-item'

            //         });

                  });
})(jQuery);