<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <title>@yield('pagetitle') | MyTailor African Fashion designers</title>
    <link rel="shortcut icon" href="{{ theme('images/favicon.png')}}">
    <link rel="stylesheet" href="{{ theme('css/admin.css')}}">
    <script src="{{ theme('js/vendor.js') }}"></script>
    <!-- Material Design style -->
    <link rel="stylesheet" href="{{ theme('vendor/material-design-lite/material.min.css')}}">
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <link href="{{ theme('vendor/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css')}}" rel="stylesheet" type="text/css"/>
              <link href="{{ theme('vendor/jquery-file-upload/css/jquery.fileupload.css')}}" rel="stylesheet" type="text/css"/>
              <link href="{{ theme('vendor/jquery-file-upload/css/jquery.fileupload-ui.css')}}" rel="stylesheet" type="text/css"/>

                <!-- END PAGE LEVEL PLUGINS -->
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

<!-- BEGIN PAGE LEVEL PLUGINS -->
                  <script src="{{ theme('vendor/jquery-file-upload/js/vendor/jquery.ui.widget.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/js/vendor/tmpl.min.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/js/vendor/load-image.min.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/js/vendor/canvas-to-blob.min.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/js/jquery.iframe-transport.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/js/jquery.fileupload.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/js/jquery.fileupload-process.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/js/jquery.fileupload-image.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/js/jquery.fileupload-audio.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/js/jquery.fileupload-video.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/js/jquery.fileupload-validate.js')}}" type="text/javascript"></script>
  <script src="{{ theme('vendor/jquery-file-upload/js/jquery.fileupload-ui.js')}}" type="text/javascript"></script>

  <!-- END PAGE LEVEL PLUGINS -->
      <script src="{{ theme('js/modules/form-fileupload.js')}}" type="text/javascript"></script>
        <script src="{{ theme('js/app.js') }}"></script>
        <script src="{{ theme('js/script.js') }}"></script>

</body>
</html>
