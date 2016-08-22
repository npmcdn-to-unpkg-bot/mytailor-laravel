<section id="mt-search-container" style="
    background: #eee;
    position: absolute;
    top: 62px;
    width: 100%;display: none;">
    <section class="mt-sub-header mdl-layout__header-row">

    <nav class="mdl-navigation mt-nav-has-border">
        <a class="mdl-navigation__link" href="">Brands</a>
        <a class="mdl-navigation__link" href="">People</a>
        <a class="mdl-navigation__link red __active" href="">Shots</a>
        <a class="mdl-navigation__link" href="">Designers</a>
        <a class="mdl-navigation__link" href="">Events</a>
    </nav>


</section>
	<div class="mdl-grid">
	    <div class="mdl-cell mdl-cell--3-col">4</div>
	    <div class="mdl-cell mdl-cell--9-col mt-grid grid" id="hits-container">
	    	<script type="text/html" id="hit-template">
	    		    <div class="grid-item">
				      <figure>
				            <a href="" class="mt-grid___link" ng-click='open("/uploads/@{{file_name}}")'>
				                <div class="mt-image-holder">
				                    <img src="/uploads/@{{file_name}}" alt="@{{name}}">
				                </div>
				                <div class="dimOverlay"></div>
				                <figcaption>
				                    <span><img src="{{theme('images/icons/search67.svg')}}"></span>
				                </figcaption>
				            </a>
				      </figure>
				    </div>
			</script>
		    
	    </div>
	</div>
</section>

{{-- 	    		<script type="text/html" id="hit-template">
					  <div class="grid-item">
					    <div class="hit-image">
					      <img src="@{{image}}" alt="@{{name}}">
					    </div>
					    <div class="hit-content">
					      <h3 class="hit-price">$@{{price}}</h3>
					      <h2 class="hit-name">@{{{_highlightResult.name.value}}}</h2>
					      <p class="hit-description">@{{{_highlightResult.description.value}}}</p>
					    </div>
					  </div>
				</script> --}}

				<script type="text/html" id="no-results-template">
				  <div id="no-results-message">
				    <p>We didn't find any results for the search <em>"@{{query}}"</em>.</p>
				    <a href="." class="clear-all">Clear search</a>
				  </div>
				</script>