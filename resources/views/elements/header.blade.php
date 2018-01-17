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
      <div class="navbar-brand" style="text-transform:uppercase;">@yield('title')</div>
    </div>
    <div class="collapse navbar-collapse" id="bs-navbar-collapse" >
      <ul class="nav navbar-nav navbar-left">
        <li><a onClick="location.href='{{url('/')}}'"><i class="fa fa-home text-primary" aria-hidden="true"></i> Home</a></li>
        <li><a class="go_menu"><i class="fa fa-bars text-primary" aria-hidden="true"></i> Menu</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-right:0;">
        @guest
          <li><a href="#subscribe" class="navbar-link popup">LogIn</a></li>
          <li><a href="#register" class="navbar-link popup">Daftar</a></li>
        @else
          <li><a class="navbar-link">{{ Auth::user()->name }}</a></li>
          <li>
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" 
              class="navbar-link" title="Logout">
              <i class="fa fa-power-off text-danger" aria-hidden="true"></i>
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
