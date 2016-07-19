@extends('layouts.master')

@section('title', 'Tags')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('content')
<div class="container">
    <section class="sideContent">
        @foreach ($articles as $article)
        <div class="box">
            <a href="{{url('article/'.$article->url)}}">
                <img src="{{$article->image}}" class="blog-img">
            </a>
            <div class="post-meta">
            <h4>{{$article->title}}</h4>
                <ul>
                    <li><i class="fa fa-user"></i> {{$article->user->name}}</li>
                    <li><i class="fa fa-clock-o"></i> {{$article->created_at->diffForHumans()}}</li>
                    <li><i class="fa fa-folder"></i> <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></li>
                    <li><i class="fa fa-tags"></i> @foreach($article->tags as $key => $tag)<a href="/tags/{{ $tag->slug }}"> {{ $tag->name }}</a>@endforeach</li>
                </ul>
            </div>
            <p>{!! str_limit($article->body_html, $limit = 200, $end = '...') !!}</p>
            <a  class="btn btn-primary" href="{{url('article/'.$article->url)}}">Read More</a>
        </div>
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