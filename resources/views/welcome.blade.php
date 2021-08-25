@extends('layouts.app')
@section('content')
  <div class="hero-slider flexslider clearfix" data-autoplay="yes" data-pagination="yes" data-arrows="yes" data-style="fade" data-pause="yes">
    <ul class="slides">
      <li class=" parallax" style="background-image:url(images/slide1.jpg);"></li>
     
    </ul>
  </div>


    <div class="notice-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-title"> <span class="notice-bar-title-icon hidden-xs"><i class="fa fa-calendar fa-3x"></i></span> <span class="title-note">Next</span> <strong>Prayer Fellowship</strong> </div>
        <div class="col-md-3 col-sm-6 col-xs-6 notice-bar-event-title">
          <h5><a href="single-event.html">Praise, Worship, word & Prayer</a></h5>
          <span class="meta-data">14th July, 2021</span> </div>
        <div id="counter" class="col-md-4 col-sm-6 col-xs-12 counter" data-date="July 14, 2021">
          <div class="timer-col"> <span id="days"></span> <span class="timer-type">days</span> </div>
          <div class="timer-col"> <span id="hours"></span> <span class="timer-type">hrs</span> </div>
          <div class="timer-col"> <span id="minutes"></span> <span class="timer-type">mins</span> </div>
          <div class="timer-col"> <span id="seconds"></span> <span class="timer-type">secs</span> </div>
        </div>
        <div class="col-md-2 col-sm-6 hidden-xs"> <a href="events.html" class="btn btn-primary btn-lg btn-block">Contact Us</a> </div>
      </div>
    </div>
  </div>


    <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row"> 
          <!-- Start Featured Blocks -->
          <div class="featured-blocks clearfix">
            <div class="col-md-4 col-sm-4 featured-block"> <a href="our-staff.html" class="img-thumbnail"> <img src="images/staff.jpg" alt="staff"> <strong>Check in</strong> <span class="more">For Prayers</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="about.html" class="img-thumbnail"> <img src="images/newhere.jpg" alt="staff"> <strong>Questions</strong> <span class="more">Get Answers</span> </a> </div>
            <div class="col-md-4 col-sm-4 featured-block"> <a href="sermons.html" class="img-thumbnail"> <img src="images/sermons.jpg" alt="staff"> <strong>Sermons Archive</strong> <span class="more">read more</span> </a> </div>
          </div>
          <!-- End Featured Blocks --> 
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-6"> 
            <!-- Events Listing -->
            <div class="listing events-listing">
              <header class="listing-header">
                <h3>Weekly Program</h3>
              </header>
              <section class="listing-cont">
                <ul>

                   <li class="item event-item">
                    
                    <div class="event-detail">
                      <h4><a href="single-event.html">Visitation Day for Orphans and Street Children</a></h4>
                      <span class="event-dayntime meta-data">Monday | 11:30 AM - 3:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>

                  <li class="item event-item">
                    
                    <div class="event-detail">
                      <h4><a href="single-event.html">Evangelism and Door to Door Preaching</a></h4>
                      <span class="event-dayntime meta-data">Tuesday | 4:30 PM - 07:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>

                  <li class="item event-item">
                    <div class="event-detail">
                      <h4><a href="single-event.html">Ministers Fellowship & Bible Study</a></h4>
                      <span class="event-dayntime meta-data">Wednesday | 4:30 PM - 07:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>

                  <li class="item event-item">
                    <div class="event-detail">
                      <h4><a href="single-event.html">Worship Team and Sunday School Praise & Worship Training</a></h4>
                      <span class="event-dayntime meta-data">Thursday | 4:30 PM - 07:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>

                  <li class="item event-item">
                    <div class="event-detail">
                      <h4><a href="single-event.html"> Praise & Worship Practice</a></h4>
                      <span class="event-dayntime meta-data">Friday | 4:30 PM - 07:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>

                  <li class="item event-item">
                    <div class="event-detail">
                      <h4><a href="single-event.html">General Fellowship Service</a></h4>
                      <span class="event-dayntime meta-data">Saturday | 4:00 PM - 08:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>

                   <li class="item event-item">
                    <div class="event-detail">
                      <h4><a href="single-event.html">Personal Counseling and Prayers</a></h4>
                      <span class="event-dayntime meta-data">Sunday | 8:00 AM - 04:00 PM</span> </div>
                    <div class="to-event-url">
                      <div><a href="single-event.html" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>

                
                </ul>
              </section>
            </div>
            <div class="spacer-30"></div>
     
          </div>
          <!-- Start Sidebar -->
          <div class="col-md-4 col-sm-6">
            <!-- Latest Sermons -->
            <div class="listing sermons-listing">
              <header class="listing-header">
                <h3>Recent Sermons</h3>
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item sermon featured-sermon"> <span class="date">Feb 14, 2020</span>
                    <h4><a href="single-sermon.html">How To Recover The Cutting Edge</a></h4>
                    <div class="featured-sermon-video">
                      <iframe width="200" height="150" src="https://player.vimeo.com/video/19564018?title=0&amp;byline=0&amp;color=007F7B"></iframe>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis consectetur adipiscing elit. Nulla convallis egestas rhoncus</p>
                    <div class="sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video"><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio"><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online"><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF"><i class="fa fa-book"></i></a> </div>
                  </li>
                
                </ul>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="featured-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3">
          <h4>Updates from our gallery</h4>
          <a href="#" class="btn btn-default btn-lg">More Galleries</a> </div>
        <div class="col-md-3 col-sm-3 post format-image"> <a href="images/gallery-img1.jpg" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img1.jpg" alt=""> </a> </div>
        <div class="col-md-3 col-sm-3 post format-video"> <a href="http://youtu.be/NEFfnbQlGo8" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img2.jpg" alt=""> </a> </div>
        <div class="col-md-3 col-sm-3 post format-image"> <a href="images/gallery-img3.jpg" class="media-box" data-rel="prettyPhoto[Gallery]"> <img src="images/gallery-img3.jpg" alt=""> </a> </div>
      </div>
    </div>
  </div>
@endsection