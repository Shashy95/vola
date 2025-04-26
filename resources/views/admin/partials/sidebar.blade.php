<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.home') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('hero.edit') }}">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Hero</span>
      </a>
     
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('films.index') }}">
        <i class="icon-columns menu-icon"></i>
        <span class="menu-title">Films</span>      
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('gallery.index') }}">
        <i class="icon-bar-graph menu-icon"></i>
        <span class="menu-title">Gallery</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('clients.index') }}">
        <i class="icon-grid-2 menu-icon"></i>
        <span class="menu-title">Clients</span>
      </a>
    </li>

  </ul>
</nav>