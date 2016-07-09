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
        @if (count($data['posts']))
            @foreach ($data['posts'] as $post)
                <div class="third">
                    <a style="display:block;" href="{{url('blog/'.$post->url)}}">
                        <figure>
                            <figcaption><b>{{$post->title}}</b></figcaption>
                            <img src="{{$post->image}}">
                            <figcaption>{{$post->description}}</figcaption>
                        </figure>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
</section>
<section class="container center">
    <div class="box pagination">
        <ul>
            {!! $data['posts']->render() !!}
        </ul>
    </div>
</section>
@endsection
