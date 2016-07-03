<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}

    <link rel="shortcut icon" href="{{ theme('images/favicon.png')}}">
    <!-- Material Design style -->
    <link rel="stylesheet" href="{{ theme('vendor/material-design-lite/material.min.css')}}">
    <link rel="stylesheet" href="{{ theme('css/frontend.css')}}">
    <link rel="stylesheet" href="{{ theme('css/animate.css')}}">
    <link rel="stylesheet" href="{{ theme('css/vendor/ng-dialog/ngDialog.min.css') }}">
    @yield('page_styles')
    <script src="{{ theme('js/vendor.js') }}"></script>
</head>
<body>
  <div class="mt-layout @yield('bg')" ng-controller="MainController">