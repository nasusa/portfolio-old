@extends('layouts.master')

@section('title', 'Blog')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('content')
<div class="container">
    <section class="sideContent">
        @foreach ($articles as $article)
        <article id="{{$article->id}}" class="box">
            <a href="{{url('article/'.$article->slug)}}">
                <img src="{{$article->image}}">
            </a>
            <header>
                <a href="{{url('article/'.$article->slug)}}">
                    <h4>{{$article->title}}</h4>
                </a>
                <dl>
                    <dd><i class="fa fa-user"></i> {{$article->user->name}}</dd>
                    <dd><i class="fa fa-clock-o"></i> <time datetime="{{$article->created_at}}">{{$article->created_at->diffForHumans()}}</time></dd>
                    <dd><i class="fa fa-folder"></i> <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></dd>
                    <dd><i class="fa fa-tags"></i> @foreach($article->tags as $key => $tag)<a href="/tags/{{ $tag->slug }}"> {{ $tag->name }}</a>@endforeach</dd>
                </dl>
            </header>
            @markdown((str_limit($article->body, 200, '...')))
            <a class="readmore" href="{{url('article/'.$article->slug)}}">Read More</a>
        </article>
        @endforeach
        @unless (count($articles))
        <div class="box center">
            <p>Unfortunately, no items were returned.</p>
        </div>
        @endunless
        {!! $articles->render() !!}
    </section>
    @include('layouts.partials.blog_sidebar')
</div>
@endsection
