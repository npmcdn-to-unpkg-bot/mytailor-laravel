 {{-- Notification area and avatar --}}
                <div class="mt-top-menu" style="margin-left: 25px;">
                  <ul>
                  <!-- Notification Icon and Dropdown -->
                    <li>
                      <a href="#" id="notifications">
                        <div class="material-icons mdl-badge mdl-badge--overlap" data-badge=""><i class="mdi mdi-bell"></i></div>
                      </a>
                        {{-- Followers dropdown --}}
                        <ul class="mdl-menu mt-drop__menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            for="notifications">
                          <li class="mt-dropmenu__header">NOTIFICATIONS</li>
                          <li class="mt-dropmenu__items">
                          {{-- Drop Items here --}}
                              <ul class="demo-list-three mdl-list">
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons mdl-list__item-avatar">person</i>
                                    <span>Bryan Cranston</span>
                                    <span class="mdl-list__item-text-body">
                                      Bryan Cranston played the role of Walter in Breaking Bad. He is also known
                                      for playing Hal in Malcom in the Middle.
                                    </span>2
                                  </span>
                                  <span class="mdl-list__item-secondary-content">
                                    <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
                                  </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons  mdl-list__item-avatar">person</i>
                                    <span>Aaron Paul</span>
                                    <span class="mdl-list__item-text-body">
                                      Aaron Paul played the role of Jesse in Breaking Bad. He also featured in
                                      the "Need For Speed" Movie.
                                    </span>
                                  </span>
                                  <span class="mdl-list__item-secondary-content">
                                    <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
                                  </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                  <span class="mdl-list__item-primary-content">
                                    <i class="material-icons  mdl-list__item-avatar">person</i>
                                    <span>Bob Odenkirk</span>
                                    <span class="mdl-list__item-text-body">
                                      Bob Odinkrik played the role of Saul in Breaking Bad. Due to public fondness for the
                                      character, Bob stars in his own show now, called "Better Call Saul".
                                    </span>
                                  </span>
                                  <span class="mdl-list__item-secondary-content">
                                    <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
                                  </span>
                                </li>
                              </ul>
                              {{-- Break the menu --}}
                          </li>
                          <li class="mt-dropmenu__header">
                            <a href="#">View All</a>
                          </li>
                        </ul>
                    </li>
                  <!-- Mail Icon and Dropdown -->
                    <li>
                      <a href="#" class="dropdown-toggle hover-initialized" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" id="messages">
                        <div class="material-icons mdl-badge mdl-badge--overlap" data-badge=""><i class="mdi mdi-email"></i></div>
                      </a>
                        {{-- Followers dropdown --}}
                        <ul class="mdl-menu mt-drop__menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            for="messages">
                          <li class="mt-dropmenu__header">MESSAGES</li>
                        </ul>
                    </li>
                    <!-- Hmm Icon and Dropdown -->
                    <li>
                      <a href="#" class="dropdown-toggle hover-initialized" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" id="new-followers">
                        <div class="material-icons mdl-badge mdl-badge--overlap" data-badge=""><i class="mdi mdi-account-multiple"></i></div>
                      </a>
                          {{-- Followers dropdown --}}
                          <ul class="mdl-menu mt-drop__menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            for="new-followers">
                          <li class="mt-dropmenu__header">FOLLOWERS</li>
                        </ul>
                    </li>
                    <!-- Avatar Dropdown -->
                   <li>
                      <a href="#" class="dropdown-toggle mt-top-avatar" id="avatar">
                        <img alt="" class="img-circle" src="{{'/uploads/profiles/'.$user->profile->avatar}}" width="40px" height="40px">
                      </a>
                          {{-- avatar menu --}}
                          <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                            for="avatar">
                          <li class="mdl-menu__item">Some Action</li>
                          <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Another Action</li>
                          <li disabled class="mdl-menu__item">Disabled Action</li>
                          <li class="mdl-menu__item">Yet Another Action</li>
                        </ul>
                    </li>
                  </ul>
                </div>