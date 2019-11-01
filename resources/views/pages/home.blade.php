@extends('layouts.default')
@section('content')
@if(\Session::has('error'))
<div class="alert alert-danger">
{{\Session::get('error')}}
</div>
@endif
<!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-heading">Sweet Memories Forever</div>
      </div>
    </div>
  </header>

<!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">How To Order</h2>
          <h3 class="section-subheading text-muted">In Just 3 Easy Steps</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Login</h4>
          <p class="text-muted">Login to your account. If you don't have an account, create one <a href="register">here</a>.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Fill in the order form</h4>
          <p class="text-muted">You can look through our gallery for some inspiration, or simply go straight to ordering.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Pay & wait</h4>
          <p class="text-muted">That's it! You will be contacted once your order is ready for delivery or pickup.</p>
        </div>
      </div>
    </div>
  </section>

<!-- Portfolio Grid -->
  <style>
    a:link {
      color: #800080;
      text-decoration: none;
    }
  </style>
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Gallery</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="birthdays" class="portfolio-link" data-toggle="modal">
          <img class="img-fluid" src="{{ asset('cakes/cake1.jpg') }}" alt="">
            <div class="portfolio-caption">
              <h4>Birthdays</h4>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="weddings">
            <img class="img-fluid" src="{{ asset('cakes/cake8.jpg') }}" alt="">
            <div class="portfolio-caption">
              <h4>Weddings</h4>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="anniversaries">
          <img class="img-fluid" src="{{ asset('cakes/cake12.jpg') }}" alt="">
            <div class="portfolio-caption">
              <h4>Anniversaries</h4>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="cooperate">
          <img class="img-fluid" src="{{ asset('cakes/cake10.jpg') }}" alt="">
            <div class="portfolio-caption">
              <h4>Corporate Events</h4>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="graduation">
          <img class="img-fluid" src="{{ asset('cakes/cake4.jpg') }}" alt="">
            <div class="portfolio-caption">
              <h4>Graduations</h4>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="cakes">
          <img class="img-fluid" src="{{ asset('cakes/cake2.jpg') }}" alt="">
            <div class="portfolio-caption">
              <h4>Small Cakes and Pastries</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

<!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Know a little about us</h3>
        </div>
      </div>
      <div class="row">
        <p>Propelled by a dream and some flour, we sought to rise to the heights of cake business expertise within East Africa. Our mission as a cake house is to deliver uniquely crafted cakes of unmatched quality for celebrations and everyday life.</p>

        <p>Steered by our proficient Chef Mathew, our impassioned team goes above and beyond to ensure the delivery of remarkable cakes to our patrons. We believe that our customers’ gratification precedes our profit. It is in this light that we assemble premier ingredients to furnish exemplary cakes.</p>

        <p>Cakes are like books, there are some you yearn to read and old ones you want to repeat. Consequently, we endeavor to maintain and better our cake offerings, tastes and designs; as we invent new ones we invite you to challenge us. Our cakes are in diversities of birthday, corporate event and wedding cakes; baked and decorated with profession to the very precise detail.</p>
      </div>
  </section>

@stop
