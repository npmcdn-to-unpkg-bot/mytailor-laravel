            @include('layouts.template.admin.partials.head')
                    @include('layouts.template.admin.partials.header')
            @include('layouts.template.admin.partials.sidebar_nav')
            <div class="mt-page-wrapper">

                <div class="mt-layout-content">
                    <div class="mt-row--fullwidth mdl-grid">
                        <main class="admin-full-wrapper mdl-cell mdl-cell--12-col" style="margin: auto;">
                              @yield('main')
                        </main>
                    </div>
                </div>
            @include('layouts.template.admin.partials.foot')