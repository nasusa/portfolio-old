@extends('layouts.master')

@section('title', 'Blog')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('content')
<div class="container">
    <section class="sideContent">
        @if (count($data['posts']))
        @foreach ($data['posts'] as $post)
        <div class="box">
            <a href="{{url('blog/'.$post->url)}}">
                <img src="{{$post->image}}" class="blog-img">
            </a>
            <div class="post-meta">
            <h4>{{$post->title}}</h4>
                <ul>
                    <li><i class="fa fa-user"></i> Admin</li>
                    <li><i class="fa fa-clock-o"></i> {{date('H:i', strtotime($post->created_at))}}</li>
                    <li><i class="fa fa-calendar"></i> {{date('d M Y', strtotime($post->created_at))}}</li>
                </ul>
            </div>
            <p>{{str_limit($post->content, 200)}}</p>
            <a  class="btn btn-primary" href="{{url('blog/'.$post->url)}}">Read More</a>
        </div>
        @endforeach
        @endif
        <div class="box center">
            {!! $data['posts']->render() !!}
        </div>
    </section>
    @include('layouts.partials.sidebar')
</div>
@endsection
