<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <title>@yield('pagetitle') | MyTailor African Fashion designers</title>
    <link rel="shortcut icon" href="{{ theme('images/favicon.png')}}">
    <link rel="stylesheet" href="{{ theme('css/admin.css')}}">
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
                <div class="mt-header-spacer"></div>

                <div class="mt-search-wrapper expandable--search hide-on-phone">
                  <span class="icon-search"><i class="mdi mdi-magnify" style="font-size: 22px;"></i></span>
                  <form method="Get" action="#" id="search-box">
                      <input type="search" id="q" autocapitalize="off" autocomplete="off" autocorrect="off" role="textbox" spellcheck="false" type="text" value="" placeholder="search for items like men, women, shirts, shoes and more ..."/>
                  </form>
                </div>
                <button class="icon-round mdl-button mt-toggle-search" style="visibility:hidden;">
                    <i class="mdi mdi-magnify icon-center" data-type="search"></i>
                  </button>
                </div><!-- Main bar ends --> 

            </header>
            <div class="mt-layout-sidebar --scroll" ng-class="{'__visible': toggle}">
              <header class="mt-layout-sidebar__users-info-wrapp" style="background:#FB4164;">
                  <div class="mt-sidebar-avatar">
                    <img src="{{theme('images/profiles/11698517_10205466839968531_5750592294516276713_n.jpg')}}">

                    <div class="sidebar-title-wrapper">
                      <span>Jobizzness Watumad</span>
                      <div class="mdl-layout-spacer"></div>
                      <button class="icon-round mdl-button btn" id="dropdown">
                        <i class="icon-center mdi mdi-menu-down" data-type="hidden"></i>
                      </button>
                      <div class="mt-menu-container showMenu" style="visibility:hidden;" id="m9menu">
          <ul>
            <li class="mt-list-btn btn" style="transition-delay: 0.012s;"><a href="#" class="m-0">Settings</a></li>
            <li class="mt-list-btn btn" style="transition-delay: 0.084s;"><a href="{{route('auth.logout')}}" class="m-0">Logout</a></li>
          </ul></div>
                    </div>
                  </div>
              </header>
              <nav id="mt-nav-main" class="mt-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                  <h1 class="hidden">Main Navigation</h1>
                  <ul class="mt-sidebar-list">

            <li class="mt-list-active"><a href="#" class="mt-sidebar-link btn"><i class="mt-icon mdi mdi-home"></i>home</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-image"></i>shots</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-tshirt-v"></i>brands</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-trending-up"></i>trending</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mt-icon mt-accessories"></i>accessories</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mt-icon mt-"></i>contact</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mt-icon mt-shot"></i></a></li>
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

                <footer class="mt-layout-footer">
                  <ul class="icons">
                    <li><a href="https://twitter.com/MyTailor_Africa" class="mdi mdi-twitter" title="Twitter"><span class="label"></span></a></li>
                    <li><a href="https://www.facebook.com/MyTailorAfrica/" class="mdi mdi-facebook" title="Facebook"><span class="label"></span></a></li>
                    <li><a href="#" class="mdi mdi-instagram"><span class="label"></span></a></li>
                    <li><a href="#" class="mdi mdi-google-plus"><span class="label"></span></a></li>   
                  </ul>
                  <ul class="copyright">
                    <li>© 2016 MyTailor. All rights reserved.</li>
                  </ul> 
                </footer> 

                <!-- Black Screen -->
                <div class="mt-obfuscator" ng-class="{'show': toggle}" ng-click="toggleSidebar()"></div>
            
            </div> <!-- Page wrapper ends -->
        </div>
        <!-- Scripts -->
        <script src="{{ theme('js/app.js') }}"></script>
        <script src="{{ theme('js/script.js') }}"></script>

</body>
</html>
