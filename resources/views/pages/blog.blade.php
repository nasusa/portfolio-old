@extends('layouts.master')

@section('title', 'Blog')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('content')
<div class="container">
    <section class="sideContent">
        @foreach ($articles as $article)
        <article id="{{$article->id}}"class="box">
            <header>
                <a href="{{url('article/'.$article->slug)}}">
                    <img src="{{$article->image}}">
                    <h4>{{$article->title}}</h4>
                </a>
                <div>
                    <ul>
                        <li><i class="fa fa-user"></i> {{$article->user->name}}</li>
                        <li><i class="fa fa-clock-o"></i> <time datetime="{{$article->created_at}}">{{$article->created_at->diffForHumans()}}</time></li>
                        <li><i class="fa fa-folder"></i> <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></li>
                        <li><i class="fa fa-tags"></i> @foreach($article->tags as $key => $tag)<a href="/tags/{{ $tag->slug }}"> {{ $tag->name }}</a>@endforeach</li>
                    </ul>
                </div>
            </header>
            {!! str_limit($article->body_html, $limit = 200, $end = '...') !!}
            <a  class="btn btn-primary" href="{{url('article/'.$article->slug)}}">Read More</a>
        </article>
        @endforeach
        <div class="box center">
            {!! $articles->render() !!}
        </div>
    </section>
    @include('layouts.partials.blog_sidebar')
</div>
@endsection
