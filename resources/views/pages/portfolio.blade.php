@extends('layouts.master')

@section('title', 'Portfolio')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('styles')

@stop
@section('content')
<section class="container box center">
    <div class="full title">
        <h4>Newest Portfolio Items</h4>
        <p>Jotain kivaa tekstii</p>
    </div>
    <div class="row">
        <div class="third">
            <figure>
                <img src="http://fakeimg.pl/300x200/?text=No_Image">
                <figcaption>Jotain kivaa tekstii</figcaption>
            </figure>
        </div>
        <div class="third">
            <figure>
                <img src="http://fakeimg.pl/300x200/?text=No_Image">
                <figcaption>Jotain kivaa kirjoitus</figcaption>
            </figure>
        </div>
        <div class="third">
            <figure>
                <img src="http://fakeimg.pl/300x200/?text=No_Image">
                <figcaption>Jotain kivaa tekstii</figcaption>
            </figure>
        </div>
        <div class="third">
            <figure>
                <img src="http://fakeimg.pl/300x200/?text=No_Image">
                <figcaption>Jotain kivaa kirjoitustaaadfasdfasdfsd</figcaption>
            </figure>
        </div>
        <div class="third">
            <figure>
                <img src="http://fakeimg.pl/300x200/?text=No_Image">
                <figcaption>Jotain kivaa tekstii</figcaption>
            </figure>
        </div>
        <div class="third">
            <figure>
                <img src="http://fakeimg.pl/300x200/?text=No_Image">
                <figcaption>Jotain kivaa tekstii</figcaption>
            </figure>
        </div>
    </div>
</section>
@section('scripts')

@stop
@endsection
