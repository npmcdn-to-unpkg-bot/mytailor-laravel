@extends('layouts.template.admin.page-with-aside')

@section('pagetitle', 'Dashboard')

@section('bg', 'grey60')
@section('sidebar_title', 'Analytics')
@section('icon', 'mdi-chart-areaspline')

@section('page_styles')

  <link href="/themes/default/assets/vendor/c3-angular/c3.min.css" rel="stylesheet" type="text/css"/>

@section('main')

<section ng-controller="DashboardController">
                @include('partials.breadcrump')
                <!-- here is where our view starts -->
                <div class="call-admin-head clearfix">
                  <div class="performance-title-wrapper">
                     <i class="mdi mdi-chart-line"></i>
                    <h4 class="mt-md-title">Daily Performance</h4>
                  </div>

                  <div class="mt-right-icons">
                      <ul class="admin-call-icons">
                          <li><a href="{{route('admin.shots.index')}}" class="btn icon-round" title="Shots media">
                              <i class="mdi mdi-image"></i>
                            </a></li>
                           <li><a href="#" class="btn" title="check messages">
                              <i class="mdi mdi-email"></i>
                            </a></li>
                            <li><a href="#" class="btn" title="add a new tailor">
                              <i class="mdi mdi-account-plus"></i>
                            </a></li>

                      </ul>

                  </div>
                </div>
                <!-- Cards and other stuffs in one bag -->
                <div class="row mdl-grid">

                    <div class="mdl-card mdl-cell mdl-cell--4-col mdl-shadow--2dp">
                      <section class="blue mdl-card__supporting-text purple mt-chart-card">
                          <div>
                              <h2 class="chart-title">Today's Sales</h2>
                              <h3 class="chart-number">0</h3>
                          </div>
                      </section>
                      <section class="mdl-card__actions mdl-card--border chart-info">
                          <div class="clear-fix">
                              <ul class="row chart-text-addups clearfix">
                                <li class="mdl-cell mdl-cell--6-col">
                                  <div>
                                    <span>+$0.00</span>
                                    Total revenue
                                  </div>
                                </li>
                                <li class="mdl-cell mdl-cell--6-col">
                                  <div>
                                    <span>$0.00</span>
                                    Today's sales
                                  </div>
                                </li>
                              </ul>
                          </div>
                      </section>
                    </div>

                    <div class="mdl-card mdl-cell mdl-cell--4-col mdl-shadow--2dp">
                         <section class="bluegreen mdl-card__supporting-text purple mt-chart-card">
                            <div class="p-10">
                              <h2 class="chart-title">Today's Customers</h2>
                              <h3 class="chart-number">0</h3>
                          </div>
                      </section>
                      <section class="mdl-card__actions mdl-card--border chart-info">
                        <div class="clear-fix">
                              <ul class="row chart-text-addups clearfix">
                                <li class="mdl-cell mdl-cell--6-col">
                                  <div>
                                    <span>0</span>
                                    Monthly total
                                  </div>
                                </li>
                                <li class="mdl-cell mdl-cell--6-col">
                                  <div>
                                    <span>0</span>
                                    Today's total
                                  </div>
                                </li>
                              </ul>
                          </div>
                      </section>
                    </div>

                    <div class="mdl-card mdl-cell mdl-cell--4-col mdl-shadow--2dp">
                       <section class="redish mdl-card__supporting-text purple mt-chart-card">
                            <div class="p-10">
                              <h2 class="chart-title">New Users</h2>
                              <h3 class="chart-number" ng-bind="users.new_users.rows[0][0]"></h3>
                          </div>
                      </section>
                      <section class="mdl-card__actions mdl-card--border chart-info">
                        <div class="clear-fix">
                              <ul class="row chart-text-addups clearfix">
                                <li class="mdl-cell mdl-cell--6-col">
                                  <div>
                                    <span ng-bind="users.monthly_users.rows[0][0]"></span>
                                    Monthly total
                                  </div>
                                </li>
                                <li class="mdl-cell mdl-cell--6-col">
                                  <div>
                                    <span ng-bind="users.todays_users.rows[0][0]"></span>
                                    Today's total
                                  </div>
                                </li>
                              </ul>
                          </div>
                      </section>
                    </div>
                    <!-- More Cards -->
                    <div class="feeds-card mdl-card mdl-cell mdl-cell--8-col mdl-shadow--2dp" style="height: 400px;">
                    <header class="admin-feeds-header">
                      <div class="caption link-text">
                        <i class="mdi mdi-share-variant" style="font-size: 1.5em;"></i>
                        <span>Recent Activities</span>
                      </div>
                    </header>
                      <section class="feeds-wrapper --scroll">
                        <ul class="feeds">
                          <li>
                            <div class="col1">
                              <div class="cont">
                                <div class="cont-col1">
                                  <div class="label label-sm label-info">
                                    <i class="fa fa-check"></i>
                                  </div>
                                </div>
                                <div class="cont-col2">
                                  <div class="desc">
                                    You have 4 pending tasks. <span class="label label-sm label-warning ">
                                    Take action <i class="fa fa-share"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col2">
                              <div class="date">
                                Just now
                              </div>
                            </div>
                          </li>
                          <li>
                            <a href="javascript:;">
                              <div class="col1">
                                <div class="cont">
                                  <div class="cont-col1">
                                    <div class="label label-sm label-success">
                                      <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                  </div>
                                  <div class="cont-col2">
                                    <div class="desc">
                                      Finance Report for year 2013 has been released.
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col2">
                                <div class="date">
                                  20 mins
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <div class="col1">
                              <div class="cont">
                                <div class="cont-col1">
                                  <div class="label label-sm label-danger">
                                    <i class="fa fa-user"></i>
                                  </div>
                                </div>
                                <div class="cont-col2">
                                  <div class="desc">
                                    You have 5 pending membership that requires a quick review.
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col2">
                              <div class="date">
                                24 mins
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="col1">
                              <div class="cont">
                                <div class="cont-col1">
                                  <div class="label label-sm label-info">
                                    <i class="fa fa-shopping-cart"></i>
                                  </div>
                                </div>
                                <div class="cont-col2">
                                  <div class="desc">
                                    New order received with <span class="label label-sm label-success">
                                    Reference Number: DR23923 </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col2">
                              <div class="date">
                                30 mins
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="col1">
                              <div class="cont">
                                <div class="cont-col1">
                                  <div class="label label-sm label-success">
                                    <i class="fa fa-user"></i>
                                  </div>
                                </div>
                                <div class="cont-col2">
                                  <div class="desc">
                                    You have 5 pending membership that requires a quick review.
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col2">
                              <div class="date">
                                24 mins
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="col1">
                              <div class="cont">
                                <div class="cont-col1">
                                  <div class="label label-sm label-default">
                                    <i class="fa fa-bell-o"></i>
                                  </div>
                                </div>
                                <div class="cont-col2">
                                  <div class="desc">
                                    Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
                                    Overdue </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col2">
                              <div class="date">
                                2 hours
                              </div>
                            </div>
                          </li>
                          <li>
                            <a href="javascript:;">
                              <div class="col1">
                                <div class="cont">
                                  <div class="cont-col1">
                                    <div class="label label-sm label-default">
                                      <i class="fa fa-briefcase"></i>
                                    </div>
                                  </div>
                                  <div class="cont-col2">
                                    <div class="desc">
                                      IPO Report for year 2013 has been released.
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col2">
                                <div class="date">
                                  20 mins
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <div class="col1">
                              <div class="cont">
                                <div class="cont-col1">
                                  <div class="label label-sm label-info">
                                    <i class="fa fa-check"></i>
                                  </div>
                                </div>
                                <div class="cont-col2">
                                  <div class="desc">
                                    You have 4 pending tasks. <span class="label label-sm label-warning ">
                                    Take action <i class="fa fa-share"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col2">
                              <div class="date">
                                Just now
                              </div>
                            </div>
                          </li>
                          <li>
                            <a href="javascript:;">
                              <div class="col1">
                                <div class="cont">
                                  <div class="cont-col1">
                                    <div class="label label-sm label-danger">
                                      <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                  </div>
                                  <div class="cont-col2">
                                    <div class="desc">
                                      Finance Report for year 2013 has been released.
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col2">
                                <div class="date">
                                  20 mins
                                </div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <div class="col1">
                              <div class="cont">
                                <div class="cont-col1">
                                  <div class="label label-sm label-default">
                                    <i class="fa fa-user"></i>
                                  </div>
                                </div>
                                <div class="cont-col2">
                                  <div class="desc">
                                    You have 5 pending membership that requires a quick review.
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col2">
                              <div class="date">
                                24 mins
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="col1">
                              <div class="cont">
                                <div class="cont-col1">
                                  <div class="label label-sm label-info">
                                    <i class="fa fa-shopping-cart"></i>
                                  </div>
                                </div>
                                <div class="cont-col2">
                                  <div class="desc">
                                    New order received with <span class="label label-sm label-success">
                                    Reference Number: DR23923 </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col2">
                              <div class="date">
                                30 mins
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="col1">
                              <div class="cont">
                                <div class="cont-col1">
                                  <div class="label label-sm label-success">
                                    <i class="fa fa-user"></i>
                                  </div>
                                </div>
                                <div class="cont-col2">
                                  <div class="desc">
                                    You have 5 pending membership that requires a quick review.
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col2">
                              <div class="date">
                                24 mins
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="col1">
                              <div class="cont">
                                <div class="cont-col1">
                                  <div class="label label-sm label-warning">
                                    <i class="fa fa-bell-o"></i>
                                  </div>
                                </div>
                                <div class="cont-col2">
                                  <div class="desc">
                                    Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
                                    Overdue </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col2">
                              <div class="date">
                                2 hours
                              </div>
                            </div>
                          </li>
                          <li>
                            <a href="javascript:;">
                              <div class="col1">
                                <div class="cont">
                                  <div class="cont-col1">
                                    <div class="label label-sm label-info">
                                      <i class="fa fa-briefcase"></i>
                                    </div>
                                  </div>
                                  <div class="cont-col2">
                                    <div class="desc">
                                      IPO Report for year 2013 has been released.
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col2">
                                <div class="date">
                                  20 mins
                                </div>
                              </div>
                            </a>
                          </li>
                        </ul>

                      </section>
                    </div>
                    <div class="mdl-card panel-basic mdl-cell mdl-cell--4-col mdl-shadow--2dp" style="height: 300px;">
                        <div class="mt-panel-heading">
                            <div class="">
                              <button class="btn mdl-button icon-round" id="dropdown">
                                  <i class="icon-center mdi mdi-dots-vertical" data-type="hidden" style="color:#F23054"></i>
                              </button>
                            </div>

                            <h2 class="grey-text">Server load</h2>
                            <h1 class="server-value">68%</h1>
                        </div>
                        <div class="mt-panel-chart">
                          Chart

                        </div>
                    </div>
                      <!-- Todos Card -->
                    <div class="todos-card mdl-card mdl-cell mdl-cell--6-col mdl-shadow--2dp" style="min-height:240px;">
                        <header class="todos-header">
                          <div>Todo's List</div>

                          <div class="action pull-right">
                              <button type="button" class="btn mdl-button">
                                <i class="mdi mdi-check"></i>
                              </button>
                            </div>
                        </header>
                    </div>

                    <div class="feeds-card mdl-card mdl-cell mdl-cell--3-col mdl-shadow--2dp" style="min-height:240px;">
                    Facebook Feed
                    </div>

                    <div class="feeds-card mdl-card mdl-cell mdl-cell--3-col mdl-shadow--2dp" style="min-height:240px;">
                    Twitter Feed
                    </div>
                    <div class="feeds-card mdl-card mdl-cell mdl-cell--4-col mdl-shadow--2dp" style="min-height:240px;">
                    Stats
                    </div>

                    <div class="feeds-card mdl-card mdl-cell mdl-cell--8-col mdl-shadow--2dp" style="min-height:240px;">
                    Chats here
                    </div>

                    <div class="feeds-card mdl-card mdl-cell mdl-cell--12-col mdl-shadow--2dp" style="min-height:240px;" id="">
                        <c3chart bindto-id="chart7">
                          <chart-column column-id="Data 1"
                                        column-values="30,200,100,400,150,250,50"
                                        column-type="line"/>
                          <chart-axis>
                              <chart-axis-x show="false"></chart-axis-x>
                              <chart-axis-y show="false"></chart-axis-y>
                          </chart-axis>
                      </c3chart>
                    </div>
                </div> <!-- First row ends -->

                <div class="row">

                </div>
         @endsection

                @section('aside')
            <!-- Aside goes here -->
            
                          <div class="pb-5">
                            <h4>Insights</h4>
                          </div>
                          <div class="pb-5 clearfix">
                              <ul class="cl-2-sales">
                                <li>
                                  <div class="cl-2-item">
                                    <span>00</span>
                                      <a href="#" class="link-text">New Sales</a>
                                  </div>
                                </li>
                                  <li>
                                  <div class="cl-2-item">
                                    <span>$0.00</span>
                                      <a href="#" class="link-text">Weekly Profit</a>
                                  </div>
                                </li>
                              </ul>
                          </div>

                          <div class="pb-5 clearfix side-bar-analy__item">
                            <h3>Monthly Visits</h3>
                            <span ng-bind="users.monthly_users.rows[0][0]"></span>
                          </div>
                          <div class="pb-5 clearfix side-bar-analy__item">
                            <h3>Monthly Profit</h3>
                            <span>$0.00</span>
                          </div>
                          <div class="pb-5 clearfix side-bar-analy__item">
                            <h3>Monthly Customers</h3>
                            <span>00%</span>
                          </div>

                    <div class="p-20">



                    </div>

</section>

@endsection

@section('page_scripts')
  <script src="/themes/default/assets/vendor/c3-angular/c3-angular.min.js"></script>

  @endsection