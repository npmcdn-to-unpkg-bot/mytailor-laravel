<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <title>@yield('pagetitle') | MyTailor African Fashion designers</title>
    <link rel="shortcut icon" href="{{ theme('images/favicon.png')}}">
    <link rel="stylesheet" href="{{ theme('css/admin.css')}}">
    <link rel="stylesheet" href="{{ theme('css/vendor/jquery.mCustomScrollbar.min.css')}}">
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
                </div><!-- global header ends--> 
            </header>

            @include('partials.sidebar_nav')
            <div class="mt-page-wrapper">

                <div class="mt-layout-content">
                
                    <div class="mt-row--fullwidth mdl-grid">
                      <main class="admin-main-wrapper mdl-cell mdl-cell--8-col">

                      @yield('main')
                      </main>

                      <aside class="action-feed mdl-cell mdl-cell--4-col" style="background: #eee;">

                      @include('partials.right-aside')
                      </aside>
                    </div>
                </div>

                <!-- Black Screen -->
                <div class="mt-obfuscator" ng-class="{'show': toggle}" ng-click="toggleSidebar()"></div>
            
            </div> <!-- Page wrapper ends -->
        <!-- Scripts -->
        <script src="{{ theme('js/app.js') }}"></script>

        <!-- Controllers -->
        <script src="{{ theme('js/controllers/shotEditController.js') }}"></script>

        <!-- Services -->
        <script src="{{ theme('js/services/getShotData.js') }}"></script>
        <script src="{{ theme('js/script.js') }}"></script>

</body>
</html>
