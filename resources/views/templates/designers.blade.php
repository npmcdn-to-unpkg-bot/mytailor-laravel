<section class="mt-sub-header mdl-layout__header-row">

    <nav class="mdl-navigation mt-nav-has-border">
        <a class="mdl-navigation__link" href="">Latest</a>
        <a class="mdl-navigation__link" href="">Most viewed</a>
        <a class="mdl-navigation__link red __active" href="">Favorites</a>
        <a class="mdl-navigation__link" href="">Showcase</a>
        <a class="mdl-navigation__link" href="">Local</a>
    </nav>

{{--     <button id="demo-menu-lower-right"
        class="icon-round mdl-button mdl-js-button mdl-button--icon">
            <i class="icon-center mdi mdi-dots-vertical"></i>
    </button> --}}

</section>

@forelse($designers as $designer)

  <section class="mt-ptop mdl-grid designer-item" id="{{$designer->user['id']}}">
      <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp pad-1 mdl-grid">
        <hr style="width: 100%;">
        <div class="mdl-cell mdl-cell--3-col pad-1">
            <a href="#" class="mt-avatar__link"><h3>{{$designer->profile['username']}}<p>Sarasota, FL</p></h3></a>
            <a href="" class="mt-avatar-circle">
               <img height="175" width="175" src="/uploads/profiles/{{$designer->profile['avatar']}}" alt="{{$designer->profile['username']}}">
            </a>
            <h3 class="mt-title__text">About Me</h3>
            <p class="mt_support__text">{{$designer->profile['bio']}}</p>
        </div>
        <div class="mdl-cell mdl-cell--9-col pad-1 mdl-grid">
            <div class="mdl-cell mdl-cell--4-col" style="background:#eee;">
              <div class="mt__media-card">
                <a href="#">
                  <img src="/uploads/mt_e2237df2e55364d07d4547d7e7d51217.jpg">
                </a>
              </div>
               <div class="mdl-card__actions mdl-card--border">

                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect icon-round" style="float: none;">
                        <i class="mdi mdi-heart-outline icon-center" style="font-size: 0.8em;color: #F23054;"></i>
                        <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
                    </button>
                     <span>5k</span>

                    <span class="designer_card__views">
                        <i class="mdi mdi-eye"></i>
                        <span style="font-size: 12px;">278 views</span>
                    </span>
                </div>
            </div>
        </div>
        <hr style="width: 100%;">
      </div>
    
  </section>

@empty

    <div class="mt-noresult"><h4>ohh no ! sorry we didnt find anything.</h4></div>


@endforelse