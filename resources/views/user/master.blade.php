<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>BUBT Students</title>

   <!-- vendor css -->
   <link href="{{ asset('students') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
   <link href="{{ asset('students') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
   <link href="{{ asset('students') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
   <link href="{{ asset('students') }}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">

   <!-- Starlight CSS -->
   <link rel="stylesheet" href="{{ asset('students') }}/css/starlight.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="{{ route('user.dashbord') }}"><i class="icon ion-android-star-outline"></i> Students</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{ route('user.dashbord') }}" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->

      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{ Auth::user()->name }}</span>
              <img src="https://www.bubt.edu.bd/assets/componats/new-image/fav.png" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i>Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  <i class="icon ion-power"></i>
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form></li>

              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('user.dashbord') }}">Dashbord</a>

      @yield('user_content')
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('students') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('students') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('students') }}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('students') }}/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('students') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{ asset('students') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="{{ asset('students') }}/lib/d3/d3.js"></script>
    <script src="{{ asset('students') }}/lib/rickshaw/rickshaw.min.js"></script>
    <script src="{{ asset('students') }}/lib/chart.js/Chart.js"></script>
    <script src="{{ asset('students') }}/lib/Flot/jquery.flot.js"></script>
    <script src="{{ asset('students') }}/lib/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('students') }}/lib/Flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('students') }}/lib/flot-spline/jquery.flot.spline.js"></script>

    <script src="{{ asset('students') }}/js/starlight.js"></script>
    <script src="{{ asset('students') }}/js/ResizeSensor.js"></script>
    <script src={{ asset('students') }}/s/dashboard.js"></script>

  </body>
</html>
