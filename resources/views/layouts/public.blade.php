<!DOCTYPE html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="description" content="Digital Library">
	<meta name="keywords" content="BootEx">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
  <link rel="stylesheet" href="css/card.css"/>
  <link rel="stylesheet" href="css/style.css"/>

	<!-- Color Skin -->
	<link rel="stylesheet" href="css/skins/default.css"/>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  @stack('styles')
</head>

<body>
	<!-- ==== Preloder Start ==== -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- ==== Preloder End ==== -->

	<!-- ==== Main Area Start ==== -->
	<div class="main-section">
		<div id="particles"></div>

    @yield('content')
		
		<!-- Subscribe form & text-->
		<div id="subscribe" class="mfp-hide subscribe-area">
			<h2>LogIn</h2>
			<p>Masukkan Username dan Password anda!</p>
			<form class="subform" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
				<input type="text" id="email" placeholder="Username" name="name" value="{{ old('email') }}" required autofocus>
				<input type="password" id="password" placeholder="Password" name="password" required>
        <button type="submit" class="subform-btn">Masuk</button>
        {{--  <button class="subform-btn" style="background-color:#3cb371;">Daftar</button>  --}}
				<label for="mc-email"></label>
			</form>
    </div>
    <div id="register" class="mfp-hide subscribe-area">
			<h2>Register</h2>
			<p>Masukkan Username dan Password anda!</p>
			<form class="regform" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
				<input type="text" id="regmail" placeholder="Username" name="name" value="{{ old('email') }}" required autofocus>
				<input type="password" id="regpass" placeholder="Password" name="password" required>
        <button type="submit" class="subform-btn">Daftar</button>
				<label for="mc-email"></label>
			</form>
    </div>

    <div id="showdetail" class="mfp-hide showmodal"></div>
    
    <!-- Switch button -->
    <div class="toggle-menu">
      <span class="bar-one"></span>
      <span class="bar-two"></span>
      <span class="bar-three"></span>
    </div>
    
		<!-- ==== Left Area Start ==== -->
    <div class="right-menu" style="background: rgba(255, 255, 255, 0.41);">

			<!-- About Content -->
			<div class="about-content spad" style="background:#fff">
				<h2>MENU PILIHAN</h2>
				<p>Silahkan lakukan pemilihan menu yang anda inginkan.</p>
			</div>

			<!-- Service Items -->
			<div class="menu-items" style="padding-top:30px;">
        <div class="col-sm-4 service-item">
          <a class="card education" onClick="location.href='{{url('/book')}}'">
              <div class="overlay"></div>
              <div class="circle">
                <img src="img/BUKU.png" alt="">
              </div>
              <p></p>
          </a>
        </div>

        <div class="col-sm-4 service-item">
          <a class="card credentialing" onClick="location.href='{{url('/ebook')}}'">
              <div class="overlay"></div>
              <div class="circle">
                  <img src="img/ebook.png" alt="">
              </div>
              <p></p>
          </a>
        </div>

        <div class="col-sm-4 service-item">
          <a class="card wallet" onClick="location.href='{{url('/video')}}'">
              <div class="overlay"></div>
              <div class="circle">
                <img src="img/Video.png" alt="">
              </div>
              <p></p>
          </a>
        </div>

        <div class="col-sm-4 service-item">
          <a class="card human-resources" onClick="location.href='{{url('/audio')}}'">
              <div class="overlay"></div>
              <div class="circle">
                <img src="img/Audio2.png" alt="">
              </div>
              <p></p>
          </a>
        </div>

        <div class="col-sm-4 service-item">
          <a class="card media" onClick="location.href='{{url('/media')}}'">
              <div class="overlay"></div>
              <div class="circle">
                <img src="img/PEMB.png" alt="">
              </div>
              <p></p>
          </a>
        </div>

        <div class="col-sm-4 service-item">
          <a class="card gambar" onClick="location.href='{{url('/photo')}}'">
              <div class="overlay"></div>
              <div class="circle">
                  <img src="img/FOTO3.png" alt="">
              </div>
              <p></p>
          </a>
        </div>
			</div>

			<!-- Contact Area -->
			<div class="contact-area spad" style="background:#fff"></div>	
		</div>
		<!-- ==== Left Area Start ==== -->
	</div>
	<!-- ==== Main Area End ==== -->
	

	<!-- ==== Jruery & other scripts ==== -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/init-particles.js"></script>
  <script src="js/scripts.js"></script>
  @stack('scripts')
{{--  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKDPBWS51wbtLTnk8CR01Poq%2bfhoPgH7MudtSxrocTNFhE1NET70hsEQKFQGlLbg%2bmqfk1UVC9L6L419fJZPfdY9y7JPq5rCKkoLi32orHPgcwbLsZ0lM0HXmnZel6P50irIaDk8OOfLQPY1RRC1l7U5hcRFE%2fedzwOR0QnyOsiEGIFqq6aladqCUjRsIveRhmwX3Ku1FfQEPOeEAzPbAmzbDg4ywTZh3qCPDcszogy9euO%2bNTYVxs3aCNhp%2f8rgXmccR5JnY0geoZtyL1xo%2fk%2fXxesXiE3Xpg6jfrVD%2fNWHJLLGgDrWO83buXC4K0F24vqSXWEBI2erzunnd2kUa6SMzjAu8At%2fzJuVAKCtLSlb1BnRaBtmCMY11OQQhzcKUgbLM4e9v0Q7jKt1dNP2aVhC4GDKhtqxRtU204S24nyiDes4qtk2XtbJfe3hflrIlDDoYXq%2bxicbiP58OcobHp1rsRSYpd7rrQGJI6VDqy3JviJXDy035jug%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>  --}}
</body>

</html>
