@extends('layouts.master')

@section('title','Etusivu')
@section('description','These, are, keywords')
@section('styles')

@stop
@section('content')
<section class="mainhero">
    <div class="padding">
        <div class="content">
            <ul>
                <li align="center"> <img class ="headerimg" src="images/SL.jpg"> </li>
                <li><span class="pacifico">Tervetuloa Portfoliooni</span> </li>
            </ul>
        </div>
    </div>
</section>
</section>

<!-- Container box and inside boxes -->
<section class="containerbox">
    <div class="row kuvaboksi">
        <figure class="third">
            <img src="/images/computer.jpg" class="box">
            <figcaption><span class="header">COMPUTERS</span>
            <br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu.
            </figcaption>
        </figure>
        <figure class="third">
            <img src="/images/design.jpg" class="box">
            <figcaption><span class="header">DESIGN</span>
            <br> Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit. Sed augue orci, lacinia eu tincidunt et eleifend nec lacus. Donec ultricies nisl ut felis, suspendisse potenti.
            </figcaption>
        </figure>
        <figure class="third">
            <img src="/images/camera.jpg" class="box">
            <figcaption><span class="header">PHOTOGRAPHING</span>
            <br> Lorem ipsum ligula ut hendrerit mollis, ipsum erat vehicula risus, eu suscipit sem libero nec erat. Aliquam erat volutpat. Sed congue augue vitae neque. Nulla consectetuer porttitor pede.
            </figcaption>
        </figure>
    </div>
    <div class="row kuvaboksi">
        <figure class="second">
            <img src="/images/me.jpg" class="box">
            <figcaption><span class="pacificoh2">Me...</span>
            <br> Mauris sed libero. Suspendisse facilisis nulla in lacinia laoreet, lorem velit accumsan velit vel mattis libero nisl et sem. Proin interdum maecenas massa turpis sagittis in, interdum non lobortis vitae massa. Quisque purus lectus, posuere eget imperdiet nec sodales id arcu. 
            </figcaption>
        </figure>
        <figure class="second">
            <img src="/images/coffee.jpg" class="box">
            <figcaption><span class="pacificoh2">Buy me a coffee...</span>
            <br> Nam molestie nec tortor. Donec placerat leo sit amet velit. Vestibulum id justo ut vitae massa. Proin in dolor mauris consequat aliquam.
            </figcaption>
        </figure>
    </div>
</section>

@section('scripts')
@stop
@stop