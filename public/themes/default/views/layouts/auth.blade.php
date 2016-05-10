<!DOCTYPE html>
<html>
    <head>
        <title>@yield('pagetitle') | MyTailor Africa</title>
        <link rel="stylesheet" href="{{ theme('css/frontend.css')}}">
        <link rel="stylesheet" href="{{ theme('css/admin.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
            <script src="{{ theme('js/vendor.js') }}"></script>
    </head>
    <body>
        <div class="mt-layout-container">

            <div class="mt-layout-admin-login clearfix">

            <div class="card-6 __left">

                    <div class="mt-login-content">
                      <h1 class="mt-admin-login-title">@yield('heading')</h1>

                        @yield('content')
                    </div>

                </div><!-- Login Ends -->

            <div class="card-6 __left hero_admin" style="min-height: 100vh;background: #03A9F4;"></div>

          </div>
        </div>
    </body>


    <script type="text/javascript">
        $(window).on('load', function(){
                  //Waves Buttons
                    Waves.attach('.btn', ['waves-button', 'waves-float']);
                    Waves.init();
                 });
    </script>
</html>
