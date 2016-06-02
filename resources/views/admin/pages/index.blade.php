@extends('layouts.template.admin.default')

@section('pagetitle', 'Pages')

@section('bg', 'whiteee')

@section('main')
<ng-controller ng-controller="pagesController">
<div class="mt-portlet-wrapper mt-card" ng-show="!showForm" id="show_pages">
    <div class="mdl-card mt-fullwidth-table">
        <div class="mdl-card__title mt-table-head dark">
            <h2 class="mdl-card__title-text">Pages</h2>
        </div>
        <div class="mdl-layout__header-row mt-table-nav">
            <div class="mdl-layout-spacer"></div>
            <!-- Navigation -->
            <nav class="mdl-navigation mt-nav-has-border">
                <a class="mdl-navigation__link __active" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
            </nav>
        </div>
        <a href="#"  ng-click="showForm = !showForm" class="btn bluegreen">Create New Page</a>
       <table class="mdl-data-table mdl-js-data-table mt-fullwidth-table">
          <thead>
            <tr>
              <th class="mdl-data-table__cell--non-numeric">Title</th>
              <th class="mdl-data-table__cell--non-numeric">URI</th>
              <th class="mdl-data-table__cell--non-numeric">Name</th>
              <th class="mdl-data-table__cell--non-numeric">Edit</th>
              <th class="mdl-data-table__cell--non-numeric">Delete</th>
            </tr>
          </thead>
          <tbody>
             @forelse($pages as $page)
                 <tr>
                 <td class="mdl-data-table__cell--non-numeric">
                 <a href="#">{{$page->title}}</a></td>
                 <td class="mdl-data-table__cell--non-numeric">
                 <a href="{{url($page->uri)}}">{{$page->present()->prettyUri}}</a></td>
                 <td class="mdl-data-table__cell--non-numeric">{{$page->name or 'None'}}</td>
                 <td class="mdl-data-table__cell--non-numeric"><a href="#"><i class="mdi mdi-pencil"></i></a>
                 </td>
                 <td class="mdl-data-table__cell--non-numeric"><a href="#"><i class="mdi mdi-delete"></i></a></td>
               </tr>
             @empty
             <tr>
                <td colspan="5" align="center">sorry no data</td>
             </tr>
             @endforelse
          </tbody>
    </table>
    </div>
</div>
    @include('admin.pages.form')
</ng-controller>
@endsection