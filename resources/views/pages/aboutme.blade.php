@extends('layouts.master')

@section('title','Etusivu')
@section('description','These, are, keywords')
@section('styles')

@stop
@section('content')

<section class="otsake">
</section>

<!-- Container box and inside boxes -->
    <div class="content">
        <ul>
            <li class="center"> <img class ="aboutmeimg" src="images/SL.jpg"> </li>
        </ul>
    </div>

<section class="container">
    <div class="row kuvaboksi">
        <figure class="third">
            <figcaption><span class="header"><a href="{{url('/')}}" class="{!! set_active('/')">GREAT PROJECTS <i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            <br> Go check my awesome projects from school and home. I love new projects, I learn from them a lot! I have now my school thesis-project going on, RGB-led-project with Arduino. Go check it out!
            </figcaption>
        </figure>
        <figure class="third">
            <figcaption><span class="header"><a href="{{url('/')}}" class="{!! set_active('/')">UNIQUE DESIGN <i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            <br> Newest thing what I want to learn. No, what I am going to learn; design. I know I have skills for this stuff. "Design is not just what it looks like and feels like. Design is how it works." - Steve Jobs
            </figcaption>
        </figure>
        <figure class="third">
            <figcaption><span class="header"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
            <br> My computer hobby is my biggest passion, but my life holds lot of other stuff too. I have natural need to create, imagine, design from graffiti and photographing. I love to find new things, learn new things, go to new places and meet new people. 
            </figcaption>
        </figure>
    </div>
</section>

<section class="container">
    <div class="second">
        <ul class="skill">
            <li>
                <span style="width: 80%;"><strong>Web Application 80%</strong></span>
            </li> 
            <li>
                <span style="width: 100%;"><strong>Respoinsive Web Design 100%</strong></span>
            </li> 
            <li>
                <span style="width: 70%;"><strong>User Experience 70%</strong></span>
            </li> 
        </ul>
    </div>
    <div class="second">
        <ul class="skill">
            <li>
                <div class="skill-wrap">
                    <span style="width: 70%;"><strong>Apps Development 70%</strong></span>
                </div>
            </li> 
            <li>
                <div class="skill-wrap">
                    <span style="width: 90%;"><strong>Photography 90%</strong></span>
                </div>
            </li> 
            <li>
                <div class="skill-wrap">
                    <span style="width: 80%;"><strong>Marketing 80%</strong></span>
                </div>
            </li> 
        </ul>
    </div>
</section>

<!-- STATSIT-->
<div class="stats">
<div class="color">
        <div class="container">
            <div class="title">
                <h1>STATUS</h1>
                <span class="border"></span>
            </div>
        </div>

<div class="container">
    <div class="yksi">
        <i class="fa fa-bed" aria-hidden="true"></i>
            <span class="sum">
                0
            </span>
            <span>
                SLEEPED HOURS
            </span>
    </div>
    <div class="yksi">
        <i class="fa fa-coffee" aria-hidden="true"></i>
            <span class="sum">
                999</span>
               <span> COFFEES
            </span>
    </div>
    <div class="yksi">
        <i class="fa fa-code" aria-hidden="true"></i>
            <span class="sum">
                1000
            </span>
            <span>
                LINES OF CODE
            </span>
    </div>
    <div class="yksi">
        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
            <span class="sum">
                2
            </span>
            <span>
                UNFINISHED PROJECTS
            </span>
    </div>
</div>
</div>
</div>

@section('scripts')
@stop
@stop