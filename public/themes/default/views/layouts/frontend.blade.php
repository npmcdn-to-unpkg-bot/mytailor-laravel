<!DOCTYPE html>
<html lang="en" ng-app="app">
    <head>
        <title>@yield('pagetitle') | African Fashion prints & designs</title>
        <link rel="shortcut icon" href="{{ theme('images/favicon.png')}}">
        <link rel="stylesheet" href="{{ theme('css/frontend.css')}}">

        {{-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> --}}
        <script src="{{ theme('js/vendor.js') }}"></script>
    </head>
    <body>
        <div class="mt-layout-container mt-layout @yield('bg')" ng-controller="MainController">
            <header class="mt-layout-header mt-header--fixed" itemscope itemtype='https://schema.org/WPHeader'>
              <div class="mt-global-header">
                <div class="pull-left">
                  <a ng-click="toggleSidebar()" class="sideTrigger">
                    <span class="mt-menu-icon">
                      <img src="{{ theme('images/icons/menu.svg')}}"  style="width: 25px; height: 30px;">
                    </span>
                    <span class="mt-menu-text">Menu</span>
                  </a>

                </div>

               <!--  <div class="mt-search-wrapper expandable--search hide-on-phone">
                  <span class="icon-search"><i class="mdi mdi-magnify" style="font-size: 22px;"></i></span>
                  <form method="Get" action="#" id="search-box">
                      <input type="search" id="q" autocapitalize="off" autocomplete="off" autocorrect="off" role="textbox" spellcheck="false" type="text" value="" placeholder="search for items like men, women, shirts, shoes and more ..."/>
                  </form>
                </div>
                <button class="icon-round mdl-button mt-toggle-search" style="visibility:hidden;">
                    <i class="mdi mdi-magnify icon-center" data-type="search"></i>
                  </button> -->
                </div><!-- Main bar ends -->  
            </header>
            <div class="mt-layout-sidebar --scroll" ng-class="{'__visible': toggle}">
              <div style="height:10em; background:#FB4164;">

                Title

              </div>
              <nav id="mt-nav-main" class="mt-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                  <h1 class="hidden">Main Navigation</h1>
                  <ul class="mt-sidebar-list">
                </ul>            
              </nav>
            </div>

            <main class="mt-page-wrapper">

                <div class="mt-layout-content">

                  <?php
                  /*---------------------------------------------------->
                  \ Load content Here and avoid complexity
                  \----------------------------------------------------->
                  \ 
                  \ Here we will yield what ever page content we want.
                  \
                  \
                  */
                  ?>

                      @yield('content')
            </main>

                {{-- Footer --}}
                
                <footer class="mt-layout-footer"></footer>
                {{-- Obfuscator --}}
                <div class="mt-obfuscator" ng-class="{'show': toggle}" ng-click="toggleSidebar()"></div>
            
            </div> <!-- Page wrapper ends -->
        </div>

        <script src="{{ theme('js/app.js') }}"></script>
        <script type="text/javascript">

        $(window).on('load', function(){
                  //Waves Buttons
                    Waves.attach('.btn', ['waves-button', 'waves-float']);
                    Waves.init();
                 });
    </script>


    </body>
</html>
