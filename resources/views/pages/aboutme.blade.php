@extends('layouts.master')

@section('title','Etusivu')
@section('description','These, are, keywords')
@section('styles')

@stop
@section('content')

<section class="otsake">
    <div class="padding">
        <div class="content">
            <ul>
                <li align="center"> <img class ="headerimg" src="images/SL.jpg"> </li>
                <li align="center"><span class="pacifico">I am Susanna</span></li>
                <li class="fancy"><span class="slogan"> DESIGNER <i class="fa fa-angle-double-right" aria-hidden="true"></i> ICT TECHNICIAN <i class="fa fa-angle-double-right" aria-hidden="true"></i> DREAMER </span></li>
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
    <div class="row kuvaboksi">
        <figure class="second">
            <figcaption><span class="pacificoh2"><a href="{{url('/')}}" class="{!! set_active('/')">About me... <i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            <br> I’m a coffee addicted pixel and code pusher from Finland. Beside my passion for computers and coding, I’m also a big music freak and a real foodie who loves all of the good things in life. 
            </figcaption>
        </figure>
        <figure class="second">
            <figcaption><span class="pacificoh2"><a href="{{url('/')}}" class="{!! set_active('/')">Buy me coffee... <i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            <br> if I provide useful or helpful with some of your project, or you just want to have a lovely chat/ask something; don’t be afraid to contact me.
            </figcaption>
        </figure>
    </div>
</section>

@section('scripts')
@stop
@stop