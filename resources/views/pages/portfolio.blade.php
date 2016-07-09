@extends('layouts.master')

@section('title', 'Portfolio')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('content')
<section class="container box center">
    <div class="full title">
        <h4>Portfolio</h4>
        <p>Täältä löyty kaikki minun työt</p>
    </div>
    <div class="row">
        @if (count($data['portfolios']))
            @foreach ($data['portfolios'] as $portfolio)
                <div class="third">
                    <a style="display:block;" href="{{url('blog/'.$portfolio->url)}}">
                        <figure>
                            <figcaption><b>{{$portfolio->title}}</b></figcaption>
                            <img src="{{$portfolio->image}}">
                            <figcaption>{{$portfolio->description}}</figcaption>
                        </figure>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
</section>
<section class="container center">
    <div class="box">
            {!! $data['portfolios']->render() !!}
    </div>
</section>
@endsection
