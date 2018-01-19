<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" style="margin:10px 0;">
    <div class="navbar-header">
      <button type="button" 
        id="to-navbar-collapsed"
        class="navbar-toggle collapsed" 
        data-toggle="collapse" 
        data-target="#bs-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <div class="navbar-brand">@yield('title')</div>
    </div>
    <div class="collapse navbar-collapse" id="bs-navbar-collapse" >
      <ul class="nav navbar-nav navbar-left">
        <li><a onClick="location.href='{{url('/')}}'"><i class="fa fa-home text-primary hidden-xs" aria-hidden="true"></i> Beranda</a></li>
        <li><a class="go_menu"><i class="fa fa-bars text-primary hidden-xs" aria-hidden="true"></i> Menu</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-right:15px;">
        @guest
          <li><a href="#subscribe" class="navbar-link popup">Masuk <i class="fa fa-sign-in text-primary hidden-xs" aria-hidden="true"></i></a></li>
          <li><a href="#register" class="navbar-link popup">Daftar <i class="fa fa-user-plus text-primary hidden-xs" aria-hidden="true"></i></a></li>
        @else
          <li><a class="navbar-link">{{ Auth::user()->name }}</a></li>
          <li>
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" 
              class="navbar-link" title="Logout">
              <i class="fa fa-sign-out text-danger" aria-hidden="true"></i>
            </a>
          </li>
          
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        @endguest
      </ul>
    </div>
  </div>
</nav>
