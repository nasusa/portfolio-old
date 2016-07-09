@extends('layouts.master')

@section('title', 'Blog')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('content')
<section class="container box center">
    <div class="full title">
        <h4>Portfolio</h4>
        <p>Täältä löyty kaikki minun työt</p>
    </div>
    <div class="row">
        <h2 class="title text-center">Latest From our Blog</h2>
                    @if (count($data['posts']))
                    @foreach ($data['posts'] as $post)
                    <div class="single-blog-post">
                        <h3>{{$post->title}}</h3>
                        <div class="post-meta">
                            <ul>
                                <li><i class="fa fa-user"></i> Admin</li>
                                <li><i class="fa fa-clock-o"></i> {{date('h:i:s A', strtotime($post->created_at))}}</li>
                                <li><i class="fa fa-calendar"></i> {{date('d M, Y', strtotime($post->created_at))}}</li>
                            </ul>
                        </div>
                        <a href="">
                            <img src="images/blog/{{$post->image}}" alt="">
                        </a>
                        <p>{{str_limit($post->content, 200)}}</p>
                        <a  class="btn btn-primary" href="{{url('blog/'.$post->url)}}">Read More</a>
                    </div>
                    @endforeach
                    @endif
                    <div class="pagination-area">
                        <ul class="pagination">
                            {!! $data['posts']->render() !!}
                        </ul>
                    </div>
    </div>
</section>
@endsection
