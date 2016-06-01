@extends('layouts.template.admin.default')

@section('pagetitle', 'Users')

@section('bg', 'grey60')

@section('main')

    <div class="mt-portlet-wrapper mt-card mdl-cell mdl-cell--12-col-desktop" ng-show="!showForm">
        <div class="mdl-card mt-fullwidth-table">
            <div class="mdl-card__title mt-table-head dark">
                <h2 class="mdl-card__title-text">Users</h2>
            </div>
            <div class="mdl-layout__header-row mt-table-nav">
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation -->
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Admins</a>
                    <a class="mdl-navigation__link" href="">Users</a>
                    <a class="mdl-navigation__link" href="">Customers</a>
                    <a class="mdl-navigation__link" href="">Team</a>
                    <a class="mdl-navigation__link" href="">Managers</a>
                </nav>
            </div>
            <a href="#"  ng-click="showForm = !showForm" class="btn bluegreen">Create New User</a>
            <table class="mdl-data-table mdl-js-data-table mt-fullwidth-table mdl-data-table--selectable">
                <thead>
                <tr>
                    <th class="mdl-data-table__cell--non-numeric">Username</th>
                    <th class="mdl-data-table__cell--non-numeric">Name</th>
                    <th class="mdl-data-table__cell--non-numeric">Email</th>
                    <th class="mdl-data-table__cell--non-numeric">Role</th>
                    <th class="mdl-data-table__cell--non-numeric">Last Seen</th>
                    <th class="mdl-data-table__cell--non-numeric">Edit</th>
                    <th class="mdl-data-table__cell--non-numeric">Delete</th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric"><a href="#">{{$user->name}}</a></td>
                        <td class="mdl-data-table__cell--non-numeric"></td>
                        <td class="mdl-data-table__cell--non-numeric">{{$user->email}}</td>
                        <td class="mdl-data-table__cell--non-numeric">Admin</td>
                        <td class="mdl-data-table__cell--non-numeric"></td>
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
    <div class="mt-portlet-wrapper mt-card mdl-cell mdl-cell--12-col-desktop" ng-show="showForm">
        I am displying a form for you to enter data
    </div>

{{--@include('form.blade.php')--}}

@endsection