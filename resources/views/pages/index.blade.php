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
                    <li align="center"> <img class ="SL" src="images/SL.jpg"> </li>
                    <li> <a> Tervetuloa Portfoliooni </a> </li>
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
            <figcaption>LOL OMG</figcaption>
        </figure>
        <figure class="third">
            <img src="/images/design.jpg" class="box">
            <figcaption>LOL OMG</figcaption>
        </figure>
        <figure class="third">
            <img src="/images/camera.jpg" class="box">
            <figcaption>LOL OMG</figcaption>
        </figure>
    </div>
    <div class="row kuvaboksi">
        <figure class="second">
            <img src="/images/me.jpg" class="box">
            <figcaption>LOL OMG</figcaption>
        </figure>
        <figure class="second">
            <img src="/images/coffee.jpg" class="box">
            <figcaption>LOL OMG</figcaption>
        </figure>
    </div>
</section>
@section('scripts')
@stop
@stop