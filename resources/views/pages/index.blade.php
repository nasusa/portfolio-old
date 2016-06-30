@extends('layouts.master')

@section('title', 'Etusivu')
@section('description', 'This is a description')
@section('keywords', 'These, are, keywords')
@section('styles')

@stop
@section('content')
<section>
    <div class="full box">
        <h4><span>Full box is bix one</h4></span>
    </div>
</section>
<section>
    <div class="half box"><h4><span>Half is a bit smaller</h4></span>
    <p>These 1/3 should be on the same line</p>
    </div>
    <div class="half">
        <div class="quarter box"><h4><span>1/3</h4></span>
        </div>
        <div class="quarter box"><h4><span>1/3</h4></span>
        </div>
    </div>
</section>
<section>
    <div class="one box"><h4><span>1</h4></span>
    </div>
    <div class="one box"><h4><span>2</h4></span>
    </div>
    <div class="one box"><h4><span>3</h4></span>
    </div>
    <div class="one box"><h4><span>4</h4></span>
    </div>
    <div class="one box"><h4><span>5</h4></span>
    </div>
    <div class="one box"><h4><span>6</h4></span>
    </div>
    <div class="one box"><h4><span>7</h4></span>
    </div>
    <div class="one box"><h4><span>8</h4></span>
    </div>
    <div class="one box"><h4><span>9</h4></span>
    </div>
    <div class="one box"><h4><span>10</h4></span>
    </div>
    <div class="one box"><h4><span>11</h4></span>
    </div>
    <div class="one box"><h4><span>12</h4></span>
    </div>
</section>
@section('scripts')

@stop
@endsection
