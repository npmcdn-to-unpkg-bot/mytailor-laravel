<?php


use Jenssegers\Agent\Agent as Agent;

$Agent = new Agent();

// agent detection influences the view storage path
if ($Agent->isMobile() || $Agent->isTablet()) {

    $viewPath = realpath(base_path('resources/views/mobile'));
    $compiled = realpath(storage_path('framework/views/mobile'));

} else {

    $viewPath = realpath(base_path('resources/views'));
    $compiled =     realpath(storage_path('framework/views'));
}



return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'paths' => [
            $viewPath
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' =>  $compiled

];
