
{{--Main Layout for home xiew--}}
@extends('layouts.template.frontend.default')
@section('bg', $page->name == 'home'? 'dark' : 'grey60')

{{--Content Area for our view--}}

@section('main')
    @if($page->view)

        {!! $page->view->render() !!}

    @else

        {!! $page->content !!}

    @endif
@endsection