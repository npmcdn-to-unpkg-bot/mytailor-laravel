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
                <div class="mdl-layout-spacer"></div>
                 {{-- Notification area and avatar --}}
                <div class="mt-top-menu">
                  <ul>
                  <!-- Notification Icon and Dropdown -->
                    <li>
                      <a href="#" class="dropdown-toggle hover-initialized" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="1"><i class="mdi mdi-bell"></i></div>
                      </a>
                    </li>
                  <!-- Mail Icon and Dropdown -->
                    <li>
                      <a href="#" class="dropdown-toggle hover-initialized" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="7"><i class="mdi mdi-email"></i></div>
                    </a>
                    </li>
                    <!-- Hmm Icon and Dropdown -->
                    <li></li>
                    <!-- Avatar Dropdown -->
                   <li>
                      <a href="#" class="dropdown-toggle mt-top-avatar">
                        <img alt="" class="img-circle" src="{{theme('images/profiles/11698517_10205466839968531_5750592294516276713_n.jpg')}}" width="40px" height="40px">
                      </a>
                    </li>
                  </ul>
                </div>
                </div><!-- global header ends--> 
            </header>