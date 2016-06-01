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
@include('layouts.template.frontend.partials.foot')