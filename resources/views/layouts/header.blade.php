<body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
          
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header-->
            <a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">TUNTAS</strong><br><strong>TUNTUTAN MASYARAKAT</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">TU</strong><strong>MAS</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
            
          </div>
     
            <!-- Log out-->
            
            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
      </nav>
    </header>
    