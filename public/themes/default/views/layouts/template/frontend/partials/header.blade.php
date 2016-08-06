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
              </div><!-- global header ends--> 
            </header>