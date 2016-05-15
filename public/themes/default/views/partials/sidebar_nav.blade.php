<div class="mt-layout-sidebar --scroll" ng-class="{'__visible': toggle}">
              <header class="mt-layout-sidebar__users-info-wrapp" style="background:#FB4164;">
                  <div class="mt-sidebar-avatar">
                    <img src="{{theme('images/profiles/11698517_10205466839968531_5750592294516276713_n.jpg')}}">

                    <div class="sidebar-title-wrapper">
                      <span>{{$admin->name}}</span>
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
            <li class="mt-list-active"><a href="{{route('admin.dashboard')}}" class="mt-sidebar-link btn"><i class="mt-icon mdi mdi-image-filter-tilt-shift"></i>Dashboard</a></li>
    <li><a href="{{route('admin.shots.index')}}" class="mt-sidebar-link btn"><i class="mdi mdi-image"></i>Shots</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-tshirt-v"></i>Tailors</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-camera-iris"></i>Apps</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-message-alert"></i>Responses</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mdi mdi-settings"></i>Settings</a></li>
    <li><a href="#" class="mt-sidebar-link btn"><i class="mt-icon mt-shot"></i></a></li>
      </ul>           
              </nav>
</div> <!-- SideBar -->