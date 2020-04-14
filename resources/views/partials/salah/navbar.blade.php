<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          {{Auth::user()->petugas->nama_petugas}}     
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <form method="POST" action="{{route('logout')}}" class="dropdown-item">
            @csrf
            <button type="submit" class="btn">
              <i class=fa fa-Sign-out mr-2></i> Logout</button>
          </form>
           </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>