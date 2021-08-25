@extends('layouts.app')
@section('content')

  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="#">Ministries</a></li>
            <li class="active">Praise and Worship Ministry</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Praise and Worship Ministry</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title">Our Praise and Worship Ministry</h2>
            </header>
            <div class="post-content">
              <img src="{{ asset('images/evangelism.jpg')}}" alt="Women Ministry" class="img-thumbnail">
               <div class="spacer-30"></div>
              <p>One of the purposes of the will of God is that all the world may get saved and come to the full knowledge and understanding of the truth of God. We therefore preach the gospel around homes, towns and villages on both personal and crusade level as one way of harvesting souls and expanding the ministry of Jesus Christ. </p>
              <hr>
              <h3>Challenges</h3>
              <p>Like any other activity, during evangelism, we also experience some challenges such as weather changes, long distances on foot, Harsh people who even release for us dogs when we knock on their Gates to preach the word of God, criticism from religious people e.t.c </p>

              <hr>
              <h3>Get Involved</h3>
              <p>However, we work hard to archive the call of God by providing platform and opportunities for anybody who is willing to partner with us either Physically, Spiritually or Financially  </p>
              <a href="contact.html" class="btn btn-primary">Sign up to Get Involved</a>
              <hr>
                <h3>Ministry Team</h3>
                <ul class="checks">
                  <li>Pastor Tayebwa Victor(Team Leader)</li>
                  <li>Brother Twekambe Thomas(Assistant Team Leader)</li>
                  <li>Sister Birungi Getrude</li>
                  <li>Sister Ankuda Olivia</li>
                </ul>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
           @include('frontviews.includes.sidebar')
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection