@extends('layouts.admin')

@section('pagetitle', 'Shots')

@section('bg', 'grey60')

@section('main')


          @include('partials.breadcrump')
          
           <div class="row m-0">
           		<header class="admin-shots-head">
           			<div class="mt-tool-bar">
           				
           			</div>
           		</header>
           		<section class="mdl-grid admin-shots-wrapper">
           			<div class="shot-item mdl-cell mdl-cell--4-col">
           				 <a href="#" data-id="5">
                      <img src="#">   
                   </a>
           			</div>
           			<div class="shot-item mdl-cell mdl-cell--4-col">
           				

           			</div>
           			<div class="shot-item mdl-cell mdl-cell--4-col">
           				

           			</div>
           			<div class="shot-item mdl-cell mdl-cell--4-col">
           				

           			</div>
           			<div class="shot-item mdl-cell mdl-cell--4-col">
           				

           			</div>
           			<div class="shot-item mdl-cell mdl-cell--4-col">
           			</div>
           				
           		</section>
@endsection

@section('aside')

			<!-- Aside goes here -->
                <section class="feed-header clearfix">
                    <div class="feed-left">
                        <h3 class="grey-text">Shot Details</h3>
                    </div>
                    <div class="feed-right">
                        <a href="#" title="more insights"><img src="images/icons/top03/bars42.svg" width="20px"></a>
                    </div>
                </section>
                 <div class="insights-container p-10">
                      <div class="single-card clearfix p-10">

                          <div class="pb-5 clearfix mt-header-shotEdit">
                          		<div class="shotEdit--title">
                          			<span>Edit Shot</span>
                          		</div>

                          		<div class="btn--group">
                          			<a href="#" class="btn btn-default --actions waves-effect waves-button waves-float">
                          				ACTIONS
                          				<i class="fa fa-angle-down"></i>
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

                          <section class="mt-pad-wrap">
                          	<form type="post" action="updateshot.php">
                          		<div class="form-body">
	              					<div class="mt-form-group">
	                                    <input type="text" class="" readonly="" disabled="" value="">
	                                    <label class="top-label">URL</label>
	                                </div>
	                                <div class="mt-form-group">
	                                    <input type="text" class="" value="">
	                                    <label class="top-label">Title</label>
	                                </div>
                                  <div class="mt-form-group">
                                      <input type="text" class="" value="">
                                      <label class="top-label">Source URL</label>
                                  </div>
	                                <div class="mt-form-group">
	                                    <select>
                                        <option value="" selected=""></option>
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

	                            <div class="mt-form-actions noborder">
	                                <button type="submit" class="btn btn-blue waves-effect waves-button waves-float">Submit</button>
	                                <button type="button" class="btn default waves-effect waves-button waves-float">Cancel</button>
	                            </div>
                          	</form>
                          </section>

                      </div>

                    </div>

                    <div class="p-20">



                    </div>
            
@endsection