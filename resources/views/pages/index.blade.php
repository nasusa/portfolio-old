@extends('layouts.master')

@section('title', 'Etusivu')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('styles')

@stop
@section('content')
<section class="container">
    <div class="full box center">
        <h4>Full box is bix one</h4>
    </div>
</section>
<section class="container">
    <div class="half box">
    <h4>Half is a bit smaller</h4>
    <p>These 1/3 should be on the same line</p>
    </div>
    <div class="quarter box"><h4>1/4</h4>
    </div>
    <div class="quarter box e"><h4>1/4</h4>
    </div>
    <div class="third box"><h4>1/3</h4>
    </div>
    <div class="one box"><h4>1</h4>
    </div>
    <div class="one box"><h4>2</h4>
    </div>
    <div class="one box"><h4>3</h4>
    </div>
    <div class="one box"><h4>4</h4>
    </div>
    <div class="one box"><h4>5</h4>
    </div>
    <div class="quarter box e"><h4>1/3</h4>
    </div>
    <div class="quarter box"><h4>1/4</h4>
    </div>
    <div class="quarter box"><h4>1/4</h4>
    </div>
    <div class="quarter box"><h4>1/4</h4>
    </div>
    <div class="quarter box"><h4>1/4</h4>
    </div>
</section>
@section('scripts')

@stop
@endsection
