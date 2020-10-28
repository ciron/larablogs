<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>BUBT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{ asset('blog_view') }}/css/bootstrap.css" rel="stylesheet" />
  <link href="{{ asset('blog_view') }}/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="{{ asset('blog_view') }}/css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="{{ asset('blog_view') }}/css/jcarousel.css" rel="stylesheet" />
  <link href="{{ asset('blog_view') }}/css/flexslider.css" rel="stylesheet" />
  <link href="{{ asset('blog_view') }}/css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="{{ asset('blog_view') }}/skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />
</head>

<body>
    <div id="wrapper">
      <!-- toggle top area -->
      <div class="hidden-top">
        <div class="hidden-top-inner container">
          <div class="row">
            <div class="span12">
              <ul>
                <li><strong>We are available for any custom works this month</strong></li>
                <li>Main office: Springville center X264, Park Ave S.01</li>
                <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- end toggle top area -->
      <!-- start header -->
      <header>
        <div class="container">
          <!-- hidden top area toggle link -->
          {{-- <div id="header-hidden-link">
            <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
          </div> --}}
          <!-- end toggle link -->
          <div class="row nomargin">
            <div class="span12">

              <div class="headnav">
                <ul>
                  @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
                </ul>
              </div>
              <!-- Signup Modal -->
              {{-- <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                    <div class="control-group">
                      <label class="control-label" for="inputEmail">Email</label>
                      <div class="controls">
                        <input type="text" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="inputSignupPassword">Password</label>
                      <div class="controls">
                        <input type="password" id="inputSignupPassword" placeholder="Password">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                      <div class="controls">
                        <input type="password" id="inputSignupPassword2" placeholder="Password">
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Sign up</button>
                      </div>
                      <p class="aligncenter margintop20">
                        Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                      </p>
                    </div>
                  </form>
                </div>
              </div> --}}
              <!-- end signup modal -->
              <!-- Sign in Modal -->
              {{-- <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                    <div class="control-group">
                      <label class="control-label" for="inputText">Username</label>
                      <div class="controls">
                        <input type="text" id="inputText" placeholder="Username">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="inputSigninPassword">Password</label>
                      <div class="controls">
                        <input type="password" id="inputSigninPassword" placeholder="Password">
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Sign in</button>
                      </div>
                      <p class="aligncenter margintop20">
                        Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                      </p>
                    </div>
                  </form>
                </div>
              </div> --}}
              <!-- end signin modal -->
              <!-- Reset Modal -->
              {{-- <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal">
                    <div class="control-group">
                      <label class="control-label" for="inputResetEmail">Email</label>
                      <div class="controls">
                        <input type="text" id="inputResetEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="controls">
                        <button type="submit" class="btn">Reset password</button>
                      </div>
                      <p class="aligncenter margintop20">
                        We will send instructions on how to reset your password to your inbox
                      </p>
                    </div>
                  </form>
                </div>
              </div> --}}
              <!-- end reset modal -->
            </div>
          </div>
          <div class="row">
            <div class="span4">
              <div class="logo">
                <a href="index.html"><img src="https://www.bubt.edu.bd/assets/frontend/images/bubt_logo.png" alt="" class="logo" /></a>
                {{-- <h1>Flat and trendy bootstrap template</h1> --}}
              </div>
            </div>
            <div class="span8">
              <div class="navbar navbar-static-top">
                <div class="navigation">
                  <nav>
                    <ul class="nav topnav">
                      <li class="dropdown">
                        <a href="index.html">Home </a>
                      </li>
                      <li class="dropdown">
                        <a href="#">About us </a>
                      </li>

                      <li class="dropdown active">
                        <a href="#">Department <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="blog-left-sidebar.html">CSE</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="contact.html">Contact Us </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <!-- end navigation -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- end header -->
    @yield('blog_contents')
      <footer>
        <div class="container">
          <div class="row">
            <div class="span3">
              <div class="widget">
                <h5 class="widgetheading">Browse pages</h5>
                <ul class="link-list">
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Our services</a></li>
                  <li><a href="#">Meet our team</a></li>
                  <li><a href="#">Get in touch with us</a></li>
                </ul>
              </div>
            </div>
            <div class="span3">
              <div class="widget">
                <h5 class="widgetheading">Important Links</h5>
                <ul class="link-list">
                  <li><a href="#">Press release</a></li>
                  <li><a href="#">Terms and conditions</a></li>
                  <li><a href="#">Privacy policy</a></li>
                  <li><a href="#">Career center</a></li>
                </ul>
              </div>
            </div>
            <div class="span3">
              <div class="widget">
                <h5 class="widgetheading">Flickr photostream</h5>
                <div class="flickr_badge">
                  <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                </div>
                <div class="clear">
                </div>
              </div>
            </div>
            <div class="span3">
              <div class="widget">
                <h5 class="widgetheading">Get in touch with us</h5>
                <address>
                                  <strong>BUBT.EDU.BD</strong><br>
                                   Mirpur-11.5<br>
                                  Dhaka
                               </address>
                <p>
                  <i class="icon-phone"></i> 72367236432<br>
                  <i class="icon-envelope-alt"></i> email@domainname.com
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="sub-footer">
          <div class="container">
            <div class="row">
              <div class="span6">
                <div class="copyright">
                  <p>
                    <span>&copy; BUBT All right reserved.</span>
                  </p>
                  <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                    -->
                    Designed by <a href="https://www.bubt.edu.bd/">BUBT TEAM</a>
                  </div>
                </div>
              </div>
              <div class="span6">
                <ul class="social-network">
                  <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
    <!-- javascript
      ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('blog_view') }}/js/jquery.js"></script>
  <script src="{{ asset('blog_view') }}/js/jquery.easing.1.3.js"></script>
  <script src="{{ asset('blog_view') }}/js/bootstrap.js"></script>
  <script src="{{ asset('blog_view') }}/js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="{{ asset('blog_view') }}/js/jquery.fancybox.pack.js"></script>
  <script src="{{ asset('blog_view') }}/js/jquery.fancybox-media.js"></script>
  <script src="{{ asset('blog_view') }}/js/google-code-prettify/prettify.js"></script>
  <script src="{{ asset('blog_view') }}/js/portfolio/jquery.quicksand.js"></script>
  <script src="{{ asset('blog_view') }}/js/portfolio/setting.js"></script>
  <script src="{{ asset('blog_view') }}/js/jquery.flexslider.js"></script>
  <script src="{{ asset('blog_view') }}/js/jquery.nivo.slider.js"></script>
  <script src="{{ asset('blog_view') }}/js/modernizr.custom.js"></script>
  <script src="{{ asset('blog_view') }}/js/jquery.ba-cond.min.js"></script>
  <script src="{{ asset('blog_view') }}/js/jquery.slitslider.js"></script>
  <script src="{{ asset('blog_view') }}/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('blog_view') }}/js/custom.js"></script>

</body>

</html>
