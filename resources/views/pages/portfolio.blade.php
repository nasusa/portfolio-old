@extends('layouts.master')

@section('title','Etusivu')
@section('description','These, are, keywords')
@section('styles')

@stop
@section('content')

<section class="headkuva">
  <div class="wrapper">
    <div class="bannerrow">
      <div class="col-1-4">
        <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1488537401/portfolio_xhgjki.jpg">
      </div>
      <div class="col-1-4">
        <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1488537401/pexels-photo_hfh26w.jpg">
      </div>
      <div class="col-1-4">
        <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1488537546/4_opgc5n.jpg">
      </div>
      <div class="col-1-4">
        <img src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1488537650/8_zc5s5f.jpg">
      </div>
    </div><!-- /.row -->
  </div><!-- /.wrapper -->
</section>

        <!-- Portfolio Item Heading -->
            <div class="col-lg-12">
                <h1 class="page-header">Portfolio Item
                    <small>Item Subheading</small>
                </h1>
            </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
<section class="container">
<div class="descript">
        <img class="img-responsive" src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1488545132/etusivu1_lyd1br.jpg" alt="">
</div>
<div class="descript">
    <h3>Project Description</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
    <h3>Project Details</h3>
            <li>Lorem Ipsum</li>
            <li>Dolor Sit Amet</li>
            <li>Consectetur</li>
            <li>Adipiscing Elit</li>
</div>

        <!-- Related Projects Row -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Related Projects</h3>
    </div>

    <div class="col-sm-3">
        <a href="#">
            <img class="img-responsive portfolio-item" src="http://res.cloudinary.com/dpnzwgeil/image/upload/v1488545849/1_mrqefx.png" alt="">
        </a>
    </div>

    <div class="col-sm-3">
        <a href="#">
            <img class="img-responsive portfolio-item" src="http://res.cloudinary.com/dpnzwgeil/image/upload/c_scale,h_300/v1488545848/2_pdjxz5.png" alt="">
        </a>
    </div>

    <div class="col-sm-3">
        <a href="#">
            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
        </a>
    </div>

    <div class="col-sm-3">
        <a href="#">
            <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
        </a>
    </div>
<hr>
</div>
</section>

@section('scripts')
@stop
@stop