@include('layouts.template.frontend.partials.head')
@include('layouts.template.frontend.partials.header')
@include('layouts.template.frontend.partials.sidebar_nav')
<div class="mt-page-wrapper">

    <div class="mt-layout-content">
        <div class="">
            <main class="" style="margin: auto;">
                @yield('main')
            </main>
        </div>
    </div>
    <section class="mt-load-more-wrapper">
        <div class="mt-load-bar">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
	</section>
@include('layouts.template.frontend.partials.foot')