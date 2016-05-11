<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/8/2016
 * Time: 1:35 AM
 */
  ?>

    {{--Main Layout for home xiew--}}
    @extends('layouts.frontend')

    @section('bg', 'dark')
    @section('pagetitle', 'Home')

        {{--Content Area for our view--}}

        @section('content')
            
            <section class="hero" style="margin-top:0px;">
                <div class="cover-container">
                    <div class="hero-viewport">
                        <div class="hero-viewport-image">
                            <div class="hero-content" style="">
                                <div class="mt-hero-textwrap">
                                    <h1 class="mt-heading">MYTAILOR AFRICA</h1>
                                    <h2 class="mt-subheading">GET INSPIRED BY TALENTED AFRICAN FASHION DESIGNERS.</h2>
                                </div>
                                <div class="mt-hero-button">
                                    <a href="/shots" class="btn mt-call-button redish"><span>Explore</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-layout_calls-wrapper mt-row">

                  <section class="mt-call-actions">
                      <a class="mt-call-items" href="" title="Trending">
                          <div class="call-item">
                            <div class="icon">
                              <img class="kilama-img" style="height:6.25rem;" src="{{theme('images/icons/t-deals.svg')}}" alt="">
                            </div>
                            <div class="mt-call-items-title">Trending Shots</div>
                            <div class="mt-call-items-text">See what's trending<br>special pick for you.</div>
                          </div>
                      </a>


                      <a class="mt-call-items" href="/mytailor.me/public_html/brands/local" title="Local-designers">
                          <div class="call-item">
                            <div class="icon">
                              <img class="kilama-img" style="height:6.25rem;" src="{{theme('images/icons/local.svg')}}" alt="">
                            </div>
                            <div class="mt-call-items-title">Local Designers</div>
                            <div class="mt-call-items-text">Learn about designers<br>from your area</div>
                          </div>
                      </a>

                        <a class="mt-call-items" href="#" title="Community">
                          <div class="call-item">
                            <div class="icon">
                              <img class="kilama-img" style="height:6.25rem;" src="{{theme('images/icons/community.svg')}}" alt="">
                            </div>
                            <div class="mt-call-items-title">Community</div>
                            <div class="mt-call-items-text">wide network of tailors<br>all around Africa</div>
                          </div>
                      </a>
                      
                         <a class="mt-call-items" href="/mytailor.me/public_html/partners" title="Partners">
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
                      <a href="/mytailor.me/public_html/shots" class="norm-text"><span class="btn redish">View Shots</span></a>
                      </div>

              </section> <!-- Call actions end -->

              <section class="mt-row-shots mt-row">
                  {{-- Shots --}}

                  <div class="mt-shot-item card-4">
                      <figure>
                        <a href="" class="sp-view">
                          <img src="">
                          <div class="grid-overlay-items">
                            <figcaption>
                              <span><img src="{{theme('images/icons/search67.svg')}}"></span>
                            </figcaption>
                          </div>
                        </a>
                      </figure>
                  </div>

                  <div class="mt-shot-item card-4">
                      <figure>
                        <a href="" class="sp-view">
                          <img src="">
                          <div class="grid-overlay-items">
                            <figcaption>
                              <span><img src="{{theme('images/icons/search67.svg')}}"></span>
                            </figcaption>
                          </div>
                        </a>
                      </figure>
                  </div>

                  <div class="mt-shot-item card-4">
                      <figure>
                        <a href="" class="sp-view">
                          <img src="">
                          <div class="grid-overlay-items">
                            <figcaption>
                              <span><img src="{{theme('images/icons/search67.svg')}}"></span>
                            </figcaption>
                          </div>
                        </a>
                      </figure>
                  </div>
              </section>

            <div style="text-align: center;padding-bottom: 4em;">
              <a href="/mytailor.me/public_html/shots/trending" class="norm-text"><span class="btn redish">Show me more</span></a>
            </div>

              {{-- Next --}}

              <section class="mt-content-section-wrapper grey60">
                <div class="mt-wrap-ptb clearfix">
                  <div class="mt-2cols-wrap">
                    <div class="mt-info-box">
                      <div style="padding:2em 0;">
                          <h2 class="bold-title">Designs Inspire !</h2>
                      </div>

                      <p class="attract-me">Inspiration comes in many ways. What you wear tells alot about you. On your next meeting, interview, every part of the Uber experience has been designed around your safety and security.</p>

                      <div class="mt-call-text">
                        <a href="" id="buzzle">See Classic wears <i class="mdi mdi-arrow-right-bold hvr-buzz-out" aria-hidden="true"></i></a>
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
        @endsection
