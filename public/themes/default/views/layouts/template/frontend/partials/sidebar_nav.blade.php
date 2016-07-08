<div class="mt-layout-sidebar --scroll" ng-class="{'__visible': toggle}">
              <header class="mt-layout-sidebar__users-info-wrapp" style="background:#FB4164;">
       {{--            <div class="mt-sidebar-avatar">
                    <img src="{{theme('images/profiles/11698517_10205466839968531_5750592294516276713_n.jpg')}}">

                    <div class="sidebar-title-wrapper">
                      <span>MyTailor</span>
                      <div class="mdl-layout-spacer"></div>
                      <button class="icon-round mdl-button btn" id="dropdown">
                        <i class="icon-center mdi mdi-menu-down" data-type="hidden"></i>
                      </button>
                    </div>
                  </div> --}}
              </header>
<nav id="mt-nav-main" class="mt-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
  <h1 class="hidden">Main Navigation</h1>
                  
  <ul class="mt-sidebar-list">
      <li class="{{ Route::is('home')? 'mt-list-active' : ''}}">
        <a href="/" class="mt-sidebar-link btn"><i class="mt-icon mdi mdi-home-variant"></i>Home</a>
      </li>
      <li class="{{ Route::is('shots.index')? 'mt-list-active' : ''}}">
        <a href="/shots" class="mt-sidebar-link btn"><i class="mdi mdi-image"></i>Shots</a>
      </li>
      <li>
        <a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-tshirt-v"></i>Designers</a>
      </li>
      <li>
        <a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-trending-up"></i>Trending</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-tshirt-v"></i>Brands</a></li>
    <li><a href="" class="mt-sidebar-link btn"><i class="mdi mdi-map-marker-circle"></i>Explore</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-heart"></i>Favorites</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-contact-mail"></i>Contact</a></li>
    </ul>           
              </nav>
</div> <!-- SideBar -->