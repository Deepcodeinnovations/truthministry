@extends('layouts.app')
@section('content')

  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Ministries</a></li>
            <li class="active">Orphanage Ministry</li>
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
          <h1>Orphanage Ministry</h1>
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
              <h2 class="post-title">Our Orphanage Ministry</h2>
            </header>
            <div class="post-content">
              <img src="{{ asset('images/orphanage.jpg')}}" alt="Women Ministry" class="img-thumbnail">
               <div class="spacer-30"></div>
              <p>In response to the overwhelming numbers of street children, orphans and abandoned babies in our community, we do child support as a way of doing a pure religion and undefined before God. We visit the fatherless and motherless(Orphans) with full hands including feeding them, providing school fees and scholastic materials to enable them find love like any other child. We have co-ordinated with a school to help them have education upto P.7 Level. We have a vision of Building them a secondary school and an institution so that we can pass them out when they are going to the field</p>
              <hr>
              <h3>Challenges</h3>
              <p>We run short of supplies i.e Books, pens, Pencils, clothes, food like posho, rice, gnuts, beans to feed the children. This is because the number is increasing day by day </p>

              <hr>
              <h3>Get Involved</h3>
              <p>However, we work hard to archive the call of God by providing platform and opportunities for anybody who is willing to partner with us either Physically, Spiritually or Financially  </p>
              <a href="contact.html" class="btn btn-primary">Sign up to Get Involved</a>
              <hr>
                <h3>Ministry Team</h3>
                <ul class="checks">
                  <li>Apostle Stuat Ainomugisha(Team Leader)</li>
                  <li>Brother Twekambe Thomas(Assistant Team Leader)</li>
                  <li>Elder Namukwaya Hellen</li>
                  <li>Elder Kyobutungi Peace</li>
                </ul>
            </div>
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-3 sidebar">
            <!-- Photo Gallery Widget -->
         @include('frontviews.includes.sidebar')
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection