<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Frontend | African Fashion is great !</title>
        <link rel="stylesheet" href="{{ theme('css/frontend.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="mt-layout-container mt-layout">
            <header class="mt-layout mt-layout-header mt-header--fixed" itemscope itemtype='https://schema.org/WPHeader'>
              <div class="mt-global-header">
               <!--  <div class="pull-left">
                  <a class="sideTrigger">
                    <span class="mt-menu-icon">
                      <img src="/images/icons/menu.svg"  style="width: 25px; height: 30px;">
                    </span>
                    <span class="mt-menu-text">Menu</span>
                  </a>
                </div>

                <div class="mt-search-wrapper expandable--search hide-on-phone">
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
            <div class="mt-layout-sidebar --scroll">
              <div style="height:15em; background:#FB4164;">

                Title

              </div>
              <nav id="mt-nav-main" class="mt-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                  <h1 class="hidden">Main Navigation</h1>
                  <ul class="mt-sidebar-list">
                </ul>            
              </nav>
            </div>

            <div class="mt-page-wrapper">

                <div class="mt-layout-content">@yield('content')</div>

                <footer class="mt-layout-footer">

                </footer>
            
            </div>
        </div>
    </body>
</html>
