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
                <li align="center"><span class="pacifico">I am Susanna Lepola</span></li>
                <li class="fancy"><span class="slogan"> DESIGNER <i class="fa fa-angle-double-right" aria-hidden="true"></i> DEVELOPER <i class="fa fa-angle-double-right" aria-hidden="true"></i> DREAMER </span></li>
                <li align="center"><span class="pacifico">Welcome to my Portfolio</span> </li>
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
            <figcaption><span class="header">GREAT PROJECTS...</span>
            <br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed posuere interdum sem. Quisque ligula eros ullamcorper quis, lacinia quis facilisis sed sapien. Mauris varius diam vitae arcu.
            </figcaption>
        </figure>
        <figure class="third">
            <img src="/images/design.jpg" class="box">
            <figcaption><span class="header">UNIQUE DESIGN...</span>
            <br> Sed arcu lectus auctor vitae, consectetuer et venenatis eget velit. Sed augue orci, lacinia eu tincidunt et eleifend nec lacus. Donec ultricies nisl ut felis, suspendisse potenti.
            </figcaption>
        </figure>
        <figure class="third">
            <img src="/images/camera.jpg" class="box">
            <figcaption><span class="header"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
            <br> My computer hobby is my biggest passion, but my life holds lot of other stuff too. I have natural need to create, imagine, design from graffiti and photographing. I love to find new things, learn new things, go to new places and meet new people. 
            </figcaption>
        </figure>
    </div>
    <div class="row kuvaboksi">
        <figure class="second">
            <img src="/images/me.jpg" class="box">
            <figcaption><span class="pacificoh2">About me...</span>
            <br> I’m a coffee addicted pixel and code pusher from Finland. Beside my passion for computers and coding, I’m also a big music freak and a real foodie who loves all of the good things in life. 
            </figcaption>
        </figure>
        <figure class="second">
            <img src="/images/coffee.jpg" class="box">
            <figcaption><span class="pacificoh2">Buy me a coffee...</span>
            <br> if I provide useful or helpful with some of your project, or you just want to have a lovely chat; don’t be afraid to contact me.
            </figcaption>
        </figure>
    </div>
</section>

@section('scripts')
@stop
@stop