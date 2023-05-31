
<head>
  <meta charset="UTF-8">
  <title>Mon Dashboard</title>
  
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
          <a class="sidebar-link" href="{{ url('/professor/dashboard') }}" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard </span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ url('/professor/sujet') }}" aria-expanded="false">
            <span>
              <i class="ti ti-pencil-plus "></i>
            </span>
            <span class="hide-menu">Sujets</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="info" aria-expanded="false">
            <span>
              <i class="ti ti-user-circle"></i>
            </span>
            <span class="hide-menu">Mon compte </span>
          </a>
        </li>
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Projet</span>
        </li>
        
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ url('/professor/tache') }}" aria-expanded="false">
            <span>
              <i class="ti ti-list-numbers"></i>
            </span>
            <span class="hide-menu">Taches</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="grille" aria-expanded="false">
            <span>
              <i class="ti ti-list-check"></i>
            </span>
            <span class="hide-menu">Grilles</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ url('/professor/groupe') }}"aria-expanded="false">
            <span>
              <i class="ti ti-users"></i>
            </span>
            <span class="hide-menu">Groupes</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#" aria-expanded="false">
            <span>
              <i class="ti ti-message-circle-2"></i>
            </span>
            <span class="hide-menu">Chat</span>
          </a>
        </li>

        @if($professor->admin == 'Oui')
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Professeur admin</span>
        </li>
        </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ url('/professor/affecter.sujet') }}"  aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu"> Affecter des sujets</span>
              </a>
            </li>
            @endif

        
      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>

<!--  Sidebar End -->
