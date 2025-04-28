<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="{{ route('admin.home') }}"><img src="{{ asset('images/logo.png') }}" class="me-2" alt="logo" style="height:160px;"/></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('admin.home') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"style="height:100px;" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>


   
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item">
        <a class="nav-link" href="/" target="_blank">
          <button class="btn btn-primary">
            View Website
          </button>
        </a>
      </li>
      
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="{{asset('images/user_avatar.png')}}" alt="profile" />
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-settings text-primary"></i> Settings </a>
         <!-- Logout link -->
          <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="ti-power-off text-primary"></i> Logout
          </a>

          <!-- Hidden logout form -->
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>

        </div>
      </li>
     
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
    data-toggle="offcanvas">
    <span class="icon-menu"></span>
  </button>
   
  </div>
</nav>