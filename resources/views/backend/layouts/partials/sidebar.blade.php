
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CET Tipaza</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Sidebar user panel (optional) -->
      @if (! Auth::guest())
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->lastname ." ". Auth::user()->firstname }}</a>
          </div>
        </div>
      @endif









      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link  {{ (request()->is('backoffice/home*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link  {{ (request()->is('backoffice/users*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Administrateurs</p>
            </a>
          </li>

          {{-- <li class="nav-item has-treeview _menu-open">
            <a href="#" class="nav-link _active">
              <i class="nav-icon fas fa-info"></i>
              <p>Qui sommes nous ? <i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/home" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>A propos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Titre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>
            </ul>
          </li> --}}

          <li class="nav-item">
            <a href="{{ route('housings.index') }}" class="nav-link  {{ (request()->is('backoffice/housings*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-hotel"></i>
              <p>Gestion de l'hébergement</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('bookings.index') }}" class="nav-link  {{ (request()->is('backoffice/bookings*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-luggage-cart"></i>
              <p>Bookings</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('sliders.index') }}" class="nav-link  {{ (request()->is('backoffice/sliders*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>Gestion des sliders</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('galleries.index') }}" class="nav-link  {{ (request()->is('backoffice/galleries*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-photo-video"></i>
              <p>Gestion de la galerie</p>
            </a>
          </li>

          {{-- <li class="nav-item">
            <a href="{{ route('events.index') }}" class="nav-link  {{ (request()->is('backoffice/events*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Gestion des évènements</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-utensils"></i>
              <p>Restaurations</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>Animations et Activités</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>Gestion des clients</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-concierge-bell"></i>
              <p>Nos services</p>
            </a>
          </li> --}}
          









          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link 2
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>