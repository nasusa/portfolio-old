<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class PageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = \App\Models\Article::with('tags', 'category')->latest()->take(6)->get();
        return view('pages.index', compact('articles'));
    }

}
