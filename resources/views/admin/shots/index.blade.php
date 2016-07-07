@extends('layouts.template.admin.page-with-aside')

@section('pagetitle', 'Shots')

    @section('page_styles')
        <link rel="stylesheet" type="text/css" href="{{ theme('css/vendor/ng-img-crop/ng-img-crop.css')}}">
        <link rel="stylesheet" href="{{ theme('css/vendor/ng-dialog/ngDialog.min.css') }}">
    @endsection

@section('sidebar_title', 'Edit Shot')
@section('icon', 'mdi-pencil-box')
@section('bg', 'grey60')

@section('main')

          @include('partials.breadcrump')
           <div class="row m-0">
           		<header class="admin-shots-head">
                <div style="height: 60px;">
                  <button class="btn mdl-button icon-round">
                    <a href="{{route('shots.upload')}}"><i class="mdi mdi-cloud-upload icon-center red"></i></a>
                  </button>
                </div>
           			<div class="mt-tool-bar">
           				
           			</div>
           		</header>
           		<section class="mdl-grid admin-shots-wrapper">

                   @foreach($shots as $shot)
                      <div class="shot-item mdl-cell mdl-cell--4-col">
                         <a href="#" ng-click="show({{$shot->id}})">
                          <figure class="">
                             <img src="../uploads/{{$shot->file_name}}">
                          </figure>
                         </a>
                      </div>
                  @endforeach

           		</section>
                {!! $shots->render() !!}
@endsection

@section('aside')

			<!-- Aside goes here -->
                
          <div class="mt-header-shotEdit mdl-card__actions animated fadeIn">
                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1" style="
    margin-top: 10px;
">
                  <input type="checkbox" id="switch-1" class="mdl-switch__input" ng-model="shot.published">
                  <span class="mdl-switch__label">Publish</span>
                </label>
                <!-- Right aligned menu below button -->
                <button id="form-actions"
                        class="mdl-button btn float action_butt">
                        ACTIONS
                <i class="mdi mdi-menu-down"></i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    for="form-actions">
                  <li class="mdl-menu__item" ng-click="clickToOpen()">Set Featured</li>
                  <li class="mdl-menu__item">Edit</li>
                  <li class="mdl-menu__item" ng-click="destroy()">Delete</li>
                </ul>
          </div>

          <section class="pad-1">
          	<form type="post" ng-submit="updateShot()">
          		<div class="form-body">
					<div class="mt-form-group">
                      <input type="text" class="" readonly="" disabled="" ng-model="shot.url">
                      <label class="top-label">URL</label>
                  </div>
                  <div class="mt-form-group">
                      <input type="text" class="" ng-model="shot.title">
                      <label class="top-label">Title</label>
                  </div>
                  <div class="mt-form-group">
                      <input type="text" class="" ng-model="shot.source_url">
                      <label class="top-label">Source URL</label>
                  </div>
                  <div class="mt-form-group">
                      <select ng-model="shot.category">
                        <option selected=""></option>
                          <option value="ma">Men</option>
                          <option value="fm">Female</option>
                          <option value="ki">Kids</option>
                          <option value="cu">Couples</option>
                          <option value="ac">Accessories</option>
                      </select>
                      <label class="top-label">Category</label>
                  </div>
                 <div class="mt-form-group">
                      <input type="text" ng-model="shot.tags">
                      <label class="top-label">Tags</label>
                  </div>
                  <div class="mdl-checkbox mb-30">
                      <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                      <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" ng-model="shot.featured">
                      <span class="mdl-checkbox__label">Feature</span>
                    </label>
                 </div>
                  <div class="mt-form-group">
                      <textarea class="" rows="7" ng-model="shot.description"></textarea>
                      <label class="top-label">Description</label>
                  </div>

              </div>

              <div class="center form-buts-wrap">
                  <button type="submit" class="btn float mdl-button btn-blue">Submit</button>
                  <button ng-click="reset()" class="btn float mdl-button">Cancel</button>
              </div>
          	</form>
          </section>


    <div class="p-20">



    </div>


@endsection
