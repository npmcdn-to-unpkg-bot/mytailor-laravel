<section class="feed-header clearfix mdl-shadow--2dp">
    <h3 class="grey-text">@yield('sidebar_title')</h3>
    <span>
      <i class="mdi @yield('icon')"></i>
    </span>
</section>

<section>
    <div class="mt-card mdl-shadow--2dp clearfix">
    @yield('aside')
    </div>
</section>