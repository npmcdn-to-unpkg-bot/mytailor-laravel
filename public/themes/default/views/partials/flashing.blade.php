
@if (session()->has('flasher.message'))
	<div id="{{session('flasher.close')?'card-alert__closer':'card-alert'}}" class="alert-card {!! session('flasher.background') !!} card__right wow bounceInRight">
	  <div class="card-content {!! session('flasher.color') !!}">
	    <p>
	    <i class="mdi mdi-{!! session('flasher.icon') !!}"></i>
	    {!!session('flasher.title')!!} : {!! session('flasher.message') !!}</p>
	  </div>
	  	@if(session('flasher.close'))
			<button type="button" class="close deep-purple-text" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">×</span>
	        </button>
		@endif
	</div>
@endif