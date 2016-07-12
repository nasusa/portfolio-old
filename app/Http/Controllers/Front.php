<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\User;

class Front extends Controller
{

    var $title;
    var $description;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $portfolios = \App\Post::where('id', '>', 0)->where('type', 2)->paginate(3);
        $data['portfolios'] = $portfolios;

        return view('pages.index', array('data' => $data));
    }

    public function blog() {
        $posts = \App\Post::where('id', '>', 0)->paginate(3);
        $posts->setPath('blog');

        $data['posts'] = $posts;

        return view('pages.blog', array('data' => $data));
    }

    public function blog_post($url) {
        $post = \App\Post::where('url', '=', $url)->get();

        $post_id = $post[0]['id'];
        
        $tags = \App\BlogPostTag::postTags($post_id);

        $previous_url = \App\Post::prevBlogPostUrl($post_id);
        $next_url = \App\Post::nextBlogPostUrl($post_id);

        $data['previous_url'] = $previous_url;
        $data['next_url'] = $next_url;
        $data['tags'] = $tags;
        $data['post'] = $post[0];

        return view('pages.blog_post', array('data' => $data, 'title' => $post[0]['title'], 'description' => $post[0]['description']));
    }

    public function portfolio() {
        $portfolios = \App\Post::where('id', '>', 0)->where('type', 2)->paginate(9);
        $portfolios->setPath('portfolio');

        $data['portfolios'] = $portfolios;

        return view('pages.portfolio', array('data' => $data));
    }

    public function portfolio_post($url) {
        $post = \App\Post::where('url', '=', $url)->get();

        $post_id = $post[0]['id'];
        
        $tags = \App\BlogPostTag::postTags($post_id);

        $previous_url = \App\Post::prevBlogPostUrl($post_id);
        $next_url = \App\Post::nextBlogPostUrl($post_id);

        $data['previous_url'] = $previous_url;
        $data['next_url'] = $next_url;
        $data['tags'] = $tags;
        $data['post'] = $post[0];

        return view('pages.portfolio_post', array('data' => $data, 'title' => $post[0]['title'], 'description' => $post[0]['description']));
    }

}
