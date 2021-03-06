<!DOCTYPE HTML>
<html lang="en">
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width,initial-scale=1">
	    <meta name="keywords" content="@yield('keywords')">
	    <meta name="description" content="@yield('description')">
	    <title>Auto Value - @yield('title')</title>
	    <!--Bootstrap -->
	    <link rel="stylesheet" href="/../css/bootstrap.min.css" type="text/css">
	    <!--Custome Style -->
	    <link rel="stylesheet" href="/../css/style.css" type="text/css">
	    <!--OWL Carousel slider-->
	    <link rel="stylesheet" href="/../css/owl.carousel.css" type="text/css">
	    <link rel="stylesheet" href="/../css/owl.transitions.css" type="text/css">
	    <!--slick-slider -->
	    <link href="/../css/slick.css" rel="stylesheet">
	    <!--bootstrap-slider -->
	    <link href="/../css/bootstrap-slider.min.css" rel="stylesheet">
	    <!--FontAwesome Font Style -->
	    <link href="/../css/font-awesome.min.css" rel="stylesheet">

	    <!-- Custom Colors -->
	    <!--<link rel="stylesheet" href="colors/red.css">-->
	    <!--<link rel="stylesheet" href="colors/orange.css">-->
	    <link rel="stylesheet" href="/../colors/blue.css">
	    <!--<link rel="stylesheet" href="colors/pink.css">-->
	    <!--<link rel="stylesheet" href="colors/green.css">-->
	    <!--<link rel="stylesheet" href="colors/purple.css">-->

	    <!-- Fav and touch icons -->
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/../images/favicon-icon/apple-touch-icon-144-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/../images/favicon-icon/apple-touch-icon-114-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/../images/favicon-icon/apple-touch-icon-72-precomposed.png">
	    <link rel="apple-touch-icon-precomposed" href="/../images/favicon-icon/apple-touch-icon-57-precomposed.png">
	    <link rel="shortcut icon" href="/../images/favicon-icon/favicon.png">
	    <!-- Google-Font-->
	    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond./../js/1.4.2/respond.min.js"></script>
	    <![endif]-->  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
        function newItem() {
            window.location.href='/';
        }
      </script>
	</head>
  	<body>
  		<!--Header-->
		<header>
  			<div class="default-header">
    			<div class="container">
      				<div class="row">
        				<div class="col-sm-3 col-md-2">
          					<div class="logo"> <a href="/"><img src="/../images/logo.png" alt="image" style="height: 60px; width: 100%;" /></a> </div>
        				</div>
        				<div class="col-sm-9 col-md-10">
          					<div class="header_info">
            					<div class="header_widgets">
              						<div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              						<p class="uppercase_text">For Support Mail us : </p>
              						<a href="mailto:info@example.com">info@example.com</a> 
              					</div>
            					<div class="header_widgets">
              						<div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
	              					<p class="uppercase_text">Service Helpline Call Us: </p>
              						<a href="tel:61-1234-5678-09">+61-1234-5678-9</a> 
              					</div>
            					<div class="social-follow">
              						<ul>
						                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
						                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
						                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
						                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              						</ul>
            					</div>
            					<div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
          					</div>
        				</div>
      				</div>
    			</div>
  			</div>  
			<!-- Navigation -->
			<nav id="navigation_bar" class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					</div>
					<div class="header_wrap">
						<div class="user_login">
							<ul>
                  @if(isset($_SESSION['username']))
								<li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> Jhon Anderson <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="dropdown-menu">
										<li><a href="profile-settings.html">Profile Settings</a></li>
										<li><a href="my-vehicles.html">My Vehicles</a></li>
										<li><a href="post-vehicle.html">Post a Vehicle</a></li>
										<li><a href="#">Sign Out</a></li>
									</ul>
								</li>
                @endif
							</ul>
						</div>
						<div class="header_search">
							<div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
							<form action="#" method="get" id="header-search-form">
								<input type="text" placeholder="Search..." class="form-control">
								<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="navigation">
						<ul class="nav navbar-nav">
							<li><a href="\buy">Buy</a></li>
							<li><a href="\sell">Sell</a></li>
							<li><a href="about-us.html">Outlet Locator</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- Navigation end --> 

</header>
<!-- /Header --> 

  	@yield('content')
  

  <!--Footer -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <h6>Top Categores</h6>
            <ul>
              <li><a href="#">Car Brand Name</a></li>
              <li><a href="#">Car Brand Name 2</a></li>
              <li><a href="#">Car Brand Name 3</a></li>
              <li><a href="#">Car Brand Name 4</a></li>
              <li><a href="#">Car Brand Name 5</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <h6>About Us</h6>
            <ul>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Hybrid Cars</a></li>
              <li><a href="#">Cookies</a></li>
              <li><a href="#">Trademarks</a></li>
              <li><a href="#">Terms of use</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <h6>Useful Links</h6>
            <ul>
              <li><a href="#">Our Partners</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Sitemap</a></li>
              <li><a href="#">Investors</a></li>
              <li><a href="#">Request a Quote</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-sm-6">
            <h6>Subscribe Newsletter</h6>
            <div class="newsletter-form">
              <form action="#">
                <div class="form-group">
                  <input type="email" class="form-control newsletter-input" required placeholder="Enter Email Address" />
                </div>
                <button type="submit" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
              </form>
              <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users every week.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-6 text-right">
            <div class="footer_widget">
              <p>Download Our APP:</p>
              <ul>
                <li><a href="#"><i class="fa fa-android" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="footer_widget">
              <p>Connect with Us:</p>
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-md-pull-6">
            <p class="copy-right">Copyright &copy; 2017 CarForYou. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /Footer--> 

  <!--Back to top-->
  <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
  <!--/Back to top--> 

  <!--Login-Form -->
  <div class="modal fade" id="loginform">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Login</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="login_wrap">
              <div class="col-md-6 col-sm-6">
                <form action="/login" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username or Email address*" name="nama">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password*" name="password" >
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Login" class="btn btn-block">
                  </div>
                </form>
              </div>
              <div class="col-md-6 col-sm-6">
                <h6 class="gray_text">Login the Quick Way</h6>
                <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
              <div class="mid_divider"></div>
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
          <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
          <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
        </div>
      </div>
    </div>
  </div>
  <!--/Login-Form --> 

  <!--Register-Form -->
  <div class="modal fade" id="signupform">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Sign Up</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="signup_wrap">
              <div class="col-md-6 col-sm-6">
                <form action="/register" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="nama" required>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="No Handphone" name="nomer_handphone" required>
                  </div>
                  <div class="form-group">
                    <textarea type="text" class="form-control" placeholder="Address" name="alamat" required></textarea>
                  </div>
                  <!-- <div class="form-group checkbox">
                    <input type="checkbox" id="terms_agree">
                    <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                  </div> -->
                  <div class="form-group">
                    <input type="submit" value="Sign Up" class="btn btn-block">
                  </div>
                </form>
              </div>
              <div class="col-md-6 col-sm-6">
                <h6 class="gray_text">Login the Quick Way</h6>
                <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
              <div class="mid_divider"></div>
            </div>
          </div>
        </div>
        <div class="modal-footer text-center">
          <p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
        </div>
      </div>
    </div>
  </div>
  <!--/Register-Form --> 

  <!--Forgot-password-Form -->
  <div class="modal fade" id="forgotpassword">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h3 class="modal-title">Password Recovery</h3>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="forgotpassword_wrap">
              <div class="col-md-12">
                <form action="#" method="get">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your Email address*">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Reset My Password" class="btn btn-block">
                  </div>
                </form>
                <div class="text-center">
                  <p class="gray_text">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>
                  <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/Forgot-password-Form --> 

  <!-- Scripts --> 
  <script src="/../js/jquery.min.js"></script>
  <script src="/../js/bootstrap.min.js"></script> 
  <script src="/../js/interface.js"></script> 
  <!--bootstrap-slider-JS--> 
  <script src="/../js/bootstrap-slider.min.js"></script> 
  <!--Slider-JS--> 
  <script src="/../js/slick.min.js"></script> 
  <script src="/../js/owl.carousel.min.js"></script>

  </body>
</html>