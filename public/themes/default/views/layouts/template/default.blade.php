            @include('partials.head')
                    @include('partials.header')
            @include('partials.sidebar_nav')
            <div class="mt-page-wrapper">

                <div class="mt-layout-content">
                    <div class="mt-row--fullwidth mdl-grid">
                        <main class="admin-full-wrapper mdl-cell mdl-cell--12-col" style="margin: auto;">
                              @yield('main')
                        </main>
                    </div>
                </div>
            @include('partials.foot')