  <header class="site-header">
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-8">
            <h1 class="logo"> <a href="/"><img src="{{ asset('images/logo.png')}}" alt="Logo"></a> </h1>
          </div>
          <div class="col-md-8 col-sm-6 col-xs-4">
            <ul class="top-navigation hidden-sm hidden-xs">
              <li><a href="plan-visit.html">Plan your visit</a></li>
              <li><a href="donate.html">Donate Now</a></li>
            </ul>
            <a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a> </div>
        </div>
      </div>
    </div>
    <div class="main-menu-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navigation">
              <ul class="sf-menu">
                <li><a href="/">Home</a>
                 
                </li>
                <li><a href="javascript:void(0)" >About Us</a>
                  <ul class="dropdown" style="text-align: left !important;">
                    <li><a href="{{ route('web.history')}}">Our History</a></li>
                    <li><a href="{{ route('web.mission')}}">Mission and Vision</a></li>
                  </ul>
                </li>
      
                <li><a href="events.html">What We Do</a>
                  <ul class="dropdown" style="text-align: left !important;">
                    <li><a href="{{ route('web.evangelism')}}">Evangelism Ministry</a></li>
                    <li><a href="{{ route('web.orphanage')}}">Orphanage Ministry</a></li>
                    <li><a href="{{ route('web.widows')}}">Widows & Widowers Ministry</a></li>
                    <li><a href="{{ route('web.praise')}}">Praise & Worship Ministry</a></li>
                    <li><a href="{{ route('web.childrens')}}">Children's Choir & Dance Troupe</a></li>
                  </ul>
                </li>

                <li><a href="sermons.html">Sermons</a>
                </li>

                <li><a href="gallery-2cols-pagination.html">Gallery</a>
                </li>
                <li><a href="blog-masonry.html">News & Media</a></li>
                <li><a href="causes.html">Contact Us</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>