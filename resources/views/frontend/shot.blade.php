
{{--Main Layout for home xiew--}}
@extends('layouts.template.frontend.default')
@section('bg', 'grey60')

{{--Content Area for our view--}}

@section('main')
	<div class="overlay-wrapper animated fadeIn">

	<section class="mdl-cell mdl-cell--12-col light-shadow mt-shot-wrapper" ng-controller="shotController">

	<!-- The header -->
		<header class="mt-shot-header clearfix">
			<section class="mt-shot-actions">
				<div class="mt-shot-actions-back-btn">
					<a href="/shots" title="Shots">
						<i class="mt-back-btn"></i>
					</a>
				</div>
			</section>
            <section class="mt-shot-avatar-wrapper">
	            <a href="#" class="mt-shot-avatar" title="Mytailor">
	            	 <h2 class="mt-avatar-name">{{$shot->publishable->profile->username}}</h2>
	                <img height="30" width="30" ng-src="/uploads/profiles/{{$shot->publishable->profile->avatar}}" alt="Braden Hamm">
	            </a>
            </section>
        </header>

         <!-- The Figure -->
		<figure class="mt-figure__card mdl-card shot-cover">
			<img ng-src="/uploads/{{$shot->file_name}}">
		</figure>

		<!-- Notes -->
		<div class="shot-info">
		@unless (empty($shot->title))
			<div class="shot-title" style="padding: 1em 0;">
				<a href="#">{{$shot->title}}</a>
				<p class="shot-date">just now</p>
			</div>
		@endunless
			<div class="shot-description">
				<p>{{$shot->description}}</p>
			</div>
		</div>

		<!-- Comments -->
		<div class="mt-shots-info-wrap mt-card-light">
		<div class="mt-shot-info-head">
			<div class="mt-shot-user-actions-wrap">
				<ul class="mt-shot-user-actions">
					<li class="each-action">
						<a href="#" class="">
							<i class="mdi mdi-heart-outline" style="font-size: 2em;color: #F23054;"></i>
							<span>{{$shot->likes}}</span>
						</a>
					</li>
					<li class="each-action">
						<a>
							<i class="mdi mdi-eye" style="font-size: 2em;"></i>
							<span>{{$shot->views}}</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="mt-shot-utility-icons">
				<ul>
					<li class="util-list-surcelink m-0">
						<a class="btn mt-btn-circle m-0 waves-effect waves-button waves-float"  href="{{$shot->source_url}}" title="source URL">
                              <i class="mdi mdi-link-variant"></i>
                        </a>
					</li>
				</ul>
			</div>
		</div>
		<!-- All comments -->
		<div class="mt-shot-comments-wrapper scroller hidden">

			<div class="mt-shot-comment-cont"></div>

		</div>

		<!-- Comment Form -->
		<div class="comment-form-wrapper">
			<div class="input-comment">
				<input class="form-control" type="text" placeholder="Write your comment here ...">
			</div>
		</div>

		</div>
	</section>

</div>
@endsection