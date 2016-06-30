@extends('layouts.master')

@section('title', 'Etusivu')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('styles')

@stop
@section('content')
<section class="container">
    <div class="full box blue vcenter homepage">
        <div class="center whiteText">
            <hr>
            <h1>Teen sun duunit</h1>
            <h5>branding • web design • development • internet marketing</h5>
            <p>Sit tähän lyhyesti musta ?Sit tähän lyhyestagdi musta ?
            Sit tähän lyhyesti musta ?Sit tähän lyhyesti musta ?</p>
            <hr>
            <p>
                <a class="button" href="/">Portfolio</a>
                <a class="button" href="/">Contact Us</a>
            </p>
        </div>
    </div>
</section>
<section class="container box center">
    <div class="full title">
        <h4>Palvelut</h4>
        <p>Jotain kivaa tekstii</p>
    </div>
    <div class="third">
        <figure>
            <img src="http://fakeimg.pl/300x200/">
            <figcaption>Jotain kivaa tekstii</figcaption>
        </figure>
    </div>
    <div class="third">
        <figure>
            <img src="http://fakeimg.pl/300x200/">
            <figcaption>Jotain kivaa tekstii</figcaption>
        </figure>
    </div>
    <div class="third e">
        <figure>
            <img src="http://fakeimg.pl/300x200/">
            <figcaption>Jotain kivaa tekstii</figcaption>
        </figure>
    </div>
    <div class="third">
        <figure>
            <img src="http://fakeimg.pl/300x200/">
            <figcaption>Jotain kivaa tekstii</figcaption>
        </figure>
    </div>
    <div class="third">
        <figure>
            <img src="http://fakeimg.pl/300x200/">
            <figcaption>Jotain kivaa tekstii</figcaption>
        </figure>
    </div>
    <div class="third e">
        <figure>
            <img src="http://fakeimg.pl/300x200/">
            <figcaption>Jotain kivaa tekstii</figcaption>
        </figure>
    </div>
</section>
<section class="container center">
    <div class="full box title">
        <h4>Technology</h4>
        <p>Jotain hienoja kuvii mitä osaan ?</p>
    </div>
</section>
@section('scripts')

@stop
@endsection
