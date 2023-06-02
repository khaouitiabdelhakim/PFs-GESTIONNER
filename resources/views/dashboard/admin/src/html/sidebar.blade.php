
<head>
  <meta charset="UTF-8">
  <!-- Title -->
  <title>PFs GESTIONNER - ENSIAS</title>
  
  <link rel="shortcut icon" type="image/png" href="{!! url('styles/assets/images/logos/favicon.png') !!}" />
  <link rel="stylesheet" href="{!! url('styles/assets/css/styles.min.css') !!}" />

</head>

<!-- Sidebar Start -->
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="#" class="text-nowrap logo-img">
        <img src="{!! url('styles/assets/images/logos/logo.png') !!}" width="180" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Principale</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ url('/admin/dashboard') }}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard </span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ url('/admin/profil') }}"  aria-expanded="false">
            <span>
              <i class="ti ti-user-circle"></i>
            </span>
            <span class="hide-menu">Mon compte </span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Gestion</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ url('/admin/professors') }}"  aria-expanded="false">
            <span>
              <i class="ti ti-ballpen"></i>
            </span>
            <span class="hide-menu">Professeurs</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ url('/admin/etudiants') }}"  aria-expanded="false">
            <span>
              <i class="ti ti-user"></i>
            </span>
            <span class="hide-menu">Etudiants</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ url('/admin/groupes') }}" aria-expanded="false">
            <span>
              <i class="ti ti-users"></i>
            </span>
            <span class="hide-menu">Groupes</span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Plus</span>
        </li>
        </li>
          
            <li class="sidebar-item">
              <a class="sidebar-link" href="#" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Ajouter Admin</span>
              </a>
            </li>
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>

<!--  Sidebar End -->
