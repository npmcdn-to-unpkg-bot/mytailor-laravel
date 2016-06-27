
{{--Main Layout for home xiew--}}
@extends('layouts.template.frontend.default')

@section('bg', $page->name == 'home'? 'dark' : 'grey60')
@section('pagetitle', $page->title)

{{--Content Area for our view--}}

@section('main')
    @if($page->view)

        {!! $page->view->render() !!}

    @else

        {!! $page->content !!}

    @endif
@endsection