@extends('layouts.template.page-with-aside')

@section('pagetitle', 'Shots')

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
                             <img src="../uploads/{{$shot->file_name . '.' . $shot->file_type}}">
                          </figure>
                         </a>
                      </div>
                  @endforeach

           		</section>

@endsection

@section('aside')

			<!-- Aside goes here -->
                
                          <div class="mt-header-shotEdit">

                          		<div class="clearfix">
                                <div class="snippet-demo">
                                    <div class="snippet-demo-container demo-switch demo-switch__switch-on">
                                      <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events is-upgraded is-checked" for="switch-1" data-upgraded=",MaterialSwitch,MaterialRipple">
                            <input type="checkbox" id="switch-1" class="mdl-switch__input" checked="">
                            <span class="mdl-switch__label">Publish</span>
                          <div class="mdl-switch__track"></div><div class="mdl-switch__thumb"><span class="mdl-switch__focus-helper"></span></div><span class="mdl-switch__ripple-container mdl-js-ripple-effect mdl-ripple--center" data-upgraded=",MaterialRipple"><span class="mdl-ripple is-animating" style="width: 137.765px; height: 137.765px; transform: translate(-50%, -50%) translate(24px, 24px);"></span></span></label>
                                        </div>
                                      </div>

                          			<a href="#" class="btn float action_butt __right">
                          				ACTIONS
                          				<i class="mdi mdi-menu-down"></i>
                          			</a>
                          			<ul class="dropdown-menu pull-right" style="display:none;">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-pencil"></i> Edit </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-trash-o"></i> Delete </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-ban"></i> Ban </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="javascript:;"> Make admin </a>
                                    </li>
                                </ul>
              				        </div>
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
	                                        <option value="ac">Accessories</option>
	                                    </select>
	                                    <label class="top-label">Category</label>
	                                </div>
                                  <div class="mdl-checkbox">
                                      <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                                      <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>
                                      <span class="mdl-checkbox__label">Checkbox</span>
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