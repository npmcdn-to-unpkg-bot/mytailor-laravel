@extends('layouts.admin')

@section('pagetitle', 'Dashboard')

@section('bg', 'grey60')

@section('content')

		<div class="mt-row--fullwidth mdl-grid">
            
            <main class="admin-main-wrapper mdl-cell mdl-cell--8-col">
               <section class="dashboard-main-header">
                <div>
                   <ul class="breadcrump">
                       <li><a href="#" class="blue-text">Mytailor</a></li>
                       <li>Dashboard</li>
                   </ul>

               </div>
               </section>
                <div class="call-admin-head clearfix">
                  <div class="perform-text">
                     <img src="images/icons/chart.svg" width="30px">
                    <span>Daily Performance</span>
                  </div>

                  <div class="right-icons-wrapper">
                      <ul class="right-icons">
                          <li><a href="">
                              <img src="images/icons/chat.svg" alt="" width="20px">
                            </a></li>
                            <li><a href="/mytailor.me/public_html/admin/shots">
                              <img src="images/icons/media.svg" alt="" width="20px">

                            </a></li>
                            <li><a href="">
                              <img src="images/icons/adduser.svg" alt="" width="20px">
                            </a></li>

                      </ul>

                  </div>
                </div>

                <div class="single-column clearfix">
                    <div class="col-3-box">
                      <section class="chart-card purple">
                          <div class="p-10">
                              <h2 class="cht-title">Today's Sales</h2>
                              <h3 class="chart-number">5</h3>
                          </div>
                      </section>
                      <section class="chart-info">
                          <div class="p-10 clear-fix">
                              <ul class="cl-2-sales">
                                <li>
                                  <div>
                                    <span>$1,200</span>
                                    Total Revenue
                                  </div>
                                </li>
                                <li></li>
                              </ul>
                          </div>
                      </section>

                    </div>
                    <div class="col-3-box">
                         <section class="chart-card red">
                            <div class="p-10">
                              <h2 class="cht-title">Today's Customers</h2>
                              <h3 class="chart-number">256</h3>
                          </div>
                      </section>
                      <section class="chart-info"></section>
                    </div>
                    <div class="col-3-box">
                       <section class="chart-card blue">
                            <div class="p-10">
                              <h2 class="cht-title">New Users</h2>
                              <h3 class="chart-number">1</h3>
                          </div>
                      </section>
                      <section class="chart-info"></section>

                    </div>

                </div>

                <div class="single-column">
heyy
                </div>
            </main>
            <!-- Aside goes here -->
            <aside class="action-feed mdl-cell mdl-cell--4-col" style="background: #eee;">
                <section class="feed-header clearfix">
                    <div class="feed-left">
                        <h3 class="grey-text">Action Feed</h3>
                    </div>
                    <div class="feed-right">
                        <a href="#" title="more insights"><img src="images/icons/top03/bars42.svg" width="20px"></a>
                    </div>


                </section>
                 <div class="insights-container p-10">
                      <div class="single-card clearfix p-10">
                          <div class="pb-5">
                            <h4>Insights</h4>
                          </div>
                          <div class="pb-5 clearfix">
                              <ul class="cl-2-sales">
                                <li>
                                  <div class="cl-2-item">
                                    <span>120</span>
                                      <a href="#" class="link-text">New Sales</a>
                                  </div>
                                </li>
                                  <li>
                                  <div class="cl-2-item">
                                    <span>$4,120</span>
                                      <a href="#" class="link-text">Weekly Profit</a>
                                  </div>
                                </li>
                              </ul>
                          </div>

                          <div class="pb-5 clearfix r-text-div">
                            <h3>Monthly Visits</h3>
                            <span>600</span>
                          </div>
                          <div class="pb-5 clearfix r-text-div">
                            <h3>Monthly Profit</h3>
                            <span>$4,480</span>
                          </div>
                          <div class="pb-5 clearfix r-text-div">
                            <h3>Monthly Customers</h3>
                            <span>250</span>
                          </div>
                      </div>

                    </div>

                    <div class="p-20">



                    </div>
            </aside>
        </div>


	<a href="{{route('auth.logout')}}">LogOut</a>
@endsection