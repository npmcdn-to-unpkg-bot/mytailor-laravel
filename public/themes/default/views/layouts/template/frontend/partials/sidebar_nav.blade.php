<div class="mt-layout-sidebar --scroll" ng-class="{'__visible': toggle}">
              <header class="mt-layout-sidebar__users-info-wrapp" style="background:#FB4164;">
                  <div class="mt-sidebar-avatar">
                    <img src="{{theme('images/profiles/11698517_10205466839968531_5750592294516276713_n.jpg')}}">

                    <div class="sidebar-title-wrapper">
                      <span></span>
                      <div class="mdl-layout-spacer"></div>
                      <button class="icon-round mdl-button btn" id="dropdown">
                        <i class="icon-center mdi mdi-menu-down" data-type="hidden"></i>
                      </button>
                      <div class="mt-menu-container showMenu" style="visibility:hidden;" id="m9menu">
                          <ul>
                            <li class="mt-list-btn btn" style="transition-delay: 0.012s;"><a href="#" class="m-0">Profile</a></li>
                            <li class="mt-list-btn btn" style="transition-delay: 0.084s;"><a href="{{route('auth.logout')}}" class="m-0">Logout</a></li>
                          </ul></div>
                    </div>
                  </div>
              </header>
              <nav id="mt-nav-main" class="mt-nav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                  <h1 class="hidden">Main Navigation</h1>
                  
                  <ul class="mt-sidebar-list">
            <li class="mt-list-active"><a href="/" class="mt-sidebar-link btn"><i class="mt-icon mdi mdi-home-variant"></i>Home</a></li>
    <li><a href="/shots" class="mt-sidebar-link btn"><i class="mdi mdi-image"></i>Shots</a></li>
    <li><a href="/brands" class="mt-sidebar-link btn"><i class="mdi mdi-tshirt-v"></i>Designers</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-trending-up"></i>Trending</a></li>
    <li><a href="" class="mt-sidebar-link btn"><i class="mdi mdi-map-marker-circle"></i>Explore</a></li>
    <li><a href="/explore" class="mt-sidebar-link btn"><i class="mdi mdi-heart"></i>Favorites</a></li>
    <li><a href="/contact" class="mt-sidebar-link btn"><i class="mdi mdi-contact-mail"></i>Contact</a></li>
      </ul>           
              </nav>
</div> <!-- SideBar -->