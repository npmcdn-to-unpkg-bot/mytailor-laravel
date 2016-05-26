@extends('layouts.admin')

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
           		<section class="mdl-grid admin-shots-wrapper" ng-controller="ShotsController">

              @foreach($shots as $shot)
                <div class="shot-item mdl-cell mdl-cell--4-col">
                   <a href="#" ng-click="loadShotData({{$shot->id}})">
                    <figure class="">
                       <img src="{{'../uploads/' . $shot->file_name . '.' . $shot->file_type}}">
                    </figure>
                   </a>
                </div>

              @endforeach

           		</section>

              {!! $shots->render() !!}
@endsection

@section('aside')

			<!-- Aside goes here -->
                
                          <div class="mt-header-shotEdit">

                          		<div class="clearfix">
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
                          	<form type="post" action="" ng-controller="shotEditForm">
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
                                  <div class="md-checkbox">
                                      <input type="checkbox" id="checkbox113" class="md-check">
                                      <label>
                                      <span class="inc"></span>
                                      <span class="check"></span>
                                      <span class="box"></span>
                                      Feature</label>
                                 </div>
	                                <div class="mt-form-group">
	                                    <textarea class="" rows="3" value=""></textarea>
	                                    <label class="top-label">Description</label>
	                                </div>

	                            </div>

	                            <div class="center form-buts-wrap">
	                                <button type="submit" class="btn float mdl-button btn-blue">Submit</button>
	                                <button type="button" class="btn float mdl-button">Cancel</button>
	                            </div>
                          	</form>
                          </section>


                    <div class="p-20">



                    </div>
            
@endsection