
          <section class="hero" style="margin-top:0px;">
                <div class="cover-container">
                    <div class="hero-viewport">
                        <div class="hero-viewport-image">
                            <div class="hero-content" style="">
                                <div class="mt-hero-textwrap">
                                    <h1 class="mt-heading">MYTAILOR AFRICA</h1>
                                    <h2 class="mt-subheading">GET INSPIRED BY TALENTED <span>AFRICAN</span> FASHION <span>DESIGNERS</span>.</h2>
                                </div>
                                <div class="mt-hero-button">
                                    <a href="{{route('shots.index')}}" class="btn mt-call-button redish"><span>Explore</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-layout_calls-wrapper mt-row">
                  <section class="mt-call-actions mdl-grid">

                      <a class="mt-call-items mdl-cell mdl-cell--3-col" href="{{URL::to('shots/trending')}}" title="Trending">
                          <div class="call-item">
                            <div class="icon">
                              <img class="kilama-img" style="height:6.25rem;" src="{{theme('images/icons/t-deals.svg')}}" alt="">
                            </div>
                            <div class="mt-call-items-title">Trending Shots</div>
                            <div class="mt-call-items-text">See what's trending<br>special pick for you.</div>
                          </div>
                      </a>


                      <a class="mt-call-items mdl-cell mdl-cell--3-col" href="/" title="Local-designers">
                          <div class="call-item">
                            <div class="icon">
                              <img class="kilama-img" style="height:6.25rem;" src="{{theme('images/icons/local.svg')}}" alt="">
                            </div>
                            <div class="mt-call-items-title">Local Designers</div>
                            <div class="mt-call-items-text">Learn about designers<br>from your area</div>
                          </div>
                      </a>

                        <a class="mt-call-items mdl-cell mdl-cell--3-col" href="/" title="Community">
                          <div class="call-item">
                            <div class="icon">
                              <img class="kilama-img" style="height:6.25rem;" src="{{theme('images/icons/community.svg')}}" alt="">
                            </div>
                            <div class="mt-call-items-title">Community</div>
                            <div class="mt-call-items-text">wide network of tailors<br>all around Africa</div>
                          </div>
                      </a>

                         <a class="mt-call-items mdl-cell mdl-cell--3-col" href="/" title="Partners">
                          <div class="call-item">
                            <div class="icon">
                              <img class="kilama-img" style="height:6.25rem;" src="{{theme('images/icons/partner.svg')}}" alt="">
                            </div>
                            <div class="mt-call-items-title">Become a Partner</div>
                            <div class="mt-call-items-text">great opportunities<br>for young businesses.</div>
                          </div>
                      </a>



                    <div style="clear: both;"></div>
                  </section>


                      <div class="mt-after-call-items">
                      <a href="{{route('shots.latest', 'latest')}}" class="norm-text"><span class="btn btn--mobile redish">View Shots</span></a>
                      </div>

              </section> <!-- Call actions end -->
              <section class="mdl-grid featured-grid grid" ng-controller="shotsController">
                  @foreach($shots as $shot)
                  <div class="mt-shot-item mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                      <figure>
                        <a href="" class="shot-img_view" ng-click='open("{{$shot->file_name}}")'>
                          <img src="../uploads/featured/{{$shot->file_name . '.' . $shot->file_type}}">
                          <div class="grid-overlay-items">
                            <figcaption>
                            </figcaption>
                          </div>
                        </a>
                      </figure>
                  </div>
                  @endforeach
              </section>

            <div class="after-shots-action">
              <a href="{{URL::to('shots/trending')}}"><span class="btn __tranparent">Show me more</span></a>
            </div>

              {{-- Next --}}

              <section class="mt-content-section-wrapper grey60">
                <div class="mt-wrap-ptb clearfix">
                  <div class="mt-2cols-wrap">
                    <div class="mt-info-box">
                      <div style="padding:2em 0;">
                          <h2 class="bold-title">Occasional Wears</h2>
                      </div>

                      <p class="attract-me">Inspiration comes in many ways. Meet some of our designers and their awesome stories. Learn what others think about them to help you choose the perfect one for your next occasion.</p>

                      <div class="mt-call-text">
                        <a href="" id="buzzle">See occasional wears <i class="mdi mdi-arrow-right-bold hvr-buzz-out" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <div>

                    </div>
                  </div>

                  <div class="mt-2cols-wrap mdl-cards">
                    <div class="mt-small-banner-wrapper">
                      <ul>
                        <li>
                          <div class="mt-small-banner"></div>
                        </li>
                       <!--  <li>
                          <div class="mt-small-banner"></div>
                        </li> -->
                      </ul>

                    </div>
                  </div>
                </div>
          </section>

          <section class="mt-large-info-box">
            <h3 class="mt-title-grey">what you like, specially picked</h3>
            <p class="mt-sm-cont-txt">If your looking for something fancy let us help you by showing you the coolest shots we have. See what viewers love the most</p>

            <a href="#" style="color: #03A9F4;">check out cool stuff</a>

          </section>
          <section class="mt-row mdl-grid">
              <div class="mdl-cell mdl-cell-4--col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                  <div class="mdl-card__media" style="height: 300px">
                      <img src="{{theme('images/backgrounds/women.jpg')}}">
                  </div>
                  <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    See coolest African women prints, dresses, classic wears. 
                  </div>
                  <div class="mdl-card__actions mdl-card--border dark-card">
                    <a href="{{route('shots.index', ['cat=fm'])}}" class="mdl-button mdl-js-button mdl-js-ripple-effect">Women<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                  </div>
              </div>
              <div class="mdl-cell dark-card mdl-cell-4--col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                  <div class="mdl-card__media" style="height: 300px">
                      <img src="{{theme('images/backgrounds/men.jpg')}}">
                  </div>
                  <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                      Checkout men t-shirts & blazers uniquely made by top african tailors.
                  </div>
                  <div class="mdl-card__actions mdl-card--border blue-card">
                      <a href="{{route('shots.index', ['cat=ma'])}}" class="mdl-button mdl-js-button mdl-js-ripple-effect">Men<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                  </div>
              </div>
              <div class="mdl-cell dark-card mdl-cell-4--col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                  <div class="mdl-card__media" style="height: 300px">
                      <img src="{{theme('images/backgrounds/kids.jpg')}}">
                  </div>
                  <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                      Kids also love it fancy. browse here for some cool stuffs.
                  </div>
                  <div class="mdl-card__actions mdl-card--border redy-card">
                      <a href="{{route('shots.index', ['cat=ki'])}}" class="mdl-button mdl-js-button mdl-js-ripple-effect">Kids<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                  </div>
              </div>

          </section>