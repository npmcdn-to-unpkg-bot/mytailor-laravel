@section('page_styles')
    <link rel="stylesheet" type="text/css" href="{{ theme('css/vendor/ng-img-crop/ng-img-crop.css')}}">
    <link rel="stylesheet" href="{{ theme('css/vendor/ng-dialog/ngDialog.min.css') }}">
@endsection
<section class="mt-sub-header mdl-layout__header-row" >

    <nav class="mdl-navigation mt-nav-has-border">
        <a class="mdl-navigation__link {{ (Request::is('shots/trending') ? '__active' : '') }}" href="{{URL::to('shots/trending')}}">Trending</a>
        <a class="mdl-navigation__link {{ (Request::is('shots') || Request::is('shots/latest')? '__active' : '') }}" href="{{URL::to('shots/latest')}}">Latest</a>
        <a class="mdl-navigation__link {{ (Request::is('shots/featured') ? '__active' : '') }}" href="{{URL::to('shots/featured')}}">Featured</a>
    </nav>

    <button id="demo-menu-lower-right"
        class="icon-round mdl-button mdl-js-button mdl-button--icon">
            <i class="icon-center mdi mdi-dots-vertical"></i>
    </button>

   <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
      <li class="mdl-menu__item"><a href="?cat=ma" class="mt-menu__link">Male</a></li>
      <li class="mdl-menu__item"><a href="?cat=fm" class="mt-menu__link">Female</a></li>
      <li class="mdl-menu__item"><a href="?cat=ki" class="mt-menu__link">Kids</a></li>
      <li class="mdl-menu__item"><a href="?cat=cu" class="mt-menu__link">Couples</a></li>
      <li class="mdl-menu__item"><a href="?cat=ac" class="mt-menu__link">Accessories</a></li>
    </ul>

</section>

<section class="mt-grid clearfix grid" id="grid" ng-controller="shotsController">

@forelse($shots as $shot)

    <div class="grid-item">
      <figure>
            <a href="#" class="mt-grid___link" ng-click="open({{$shot->file_name}})">
                <div class="mt-image-holder">
                    <img src="/uploads/{{$shot->file_name}}">
                </div>
                <div class="dimOverlay"></div>
                <figcaption>
                    <span><img src="{{theme('images/icons/search67.svg')}}"></span>
                </figcaption>
            </a>
      </figure>
    </div>
    
    @empty

    <div class="mt-noresult"><h4>ohh no ! sorry we didnt find anything.</h4></div>


@endforelse


</section>
{!! $shots->render() !!}

