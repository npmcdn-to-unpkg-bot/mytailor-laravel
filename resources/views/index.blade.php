<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/8/2016
 * Time: 1:35 AM
 */
  ?>

    {{--Main Layout for home xiew--}}
    @extends('layouts.frontend')


    @section('pagetitle', 'Home')

        {{--Content Area for our view--}}

        @section('content')
            
            <section class="hero" style="margin-top:0px;">
                <div class="cover-container">
                    <div class="hero-viewport">
                        <div class="hero-viewport-image">
                            <div class="hero-content" style="">
                                <div class="mt-hero-textwrap">
                                    <h1 class="mt-heading-text">MYTAILOR AFRICA</h1>
                                    <h2 class="mt-subheading-text">GET INSPIRED BY TALENTED AFRICAN FASHION DESIGNERS.</h2>
                                </div>
                                <div class="mt-hero-button">
                                    <a href="/shots" class="btn mt-call-button redish"><span>Explore</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        @endsection
