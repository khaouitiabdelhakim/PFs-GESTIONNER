<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Title -->
  <title>PFs GESTIONNER - ENSIAS</title>
  <link rel="shortcut icon" type="image/png" href="{!! url('styles/assets/images/logos/favicon.png') !!}" />
  <link rel="stylesheet" href="{!! url('styles/assets/css/styles.min.css') !!}" />
  <style>
    body {
      margin-top: 50px; /* Espacement vers le bas */
      text-align: center; /* Centrer le contenu du corps */
    }
      
    h1 {
      margin-top: 20px;
      color: #fff;
      font-size: 24px;
      font-weight: bold;
    }

  </style>
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- the sidebar -->
    @include('dashboard.professor.src.html.sidebar')

    <!-- Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
      <header>
        @include('dashboard.professor.src.html.header')
      </header>

      <div class="container-fluid">
    <!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row content">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <h2>{{$subject->title}}</h2>
  </br>
        <ul>
          <li><i class="ti ti-corner-down-right-double"></i> <strong><i class="ri-arrow-right-line"></i> Filière:</strong> {{$subject->sector}}</li>
          </br>
          <li><i class="ti ti-corner-down-right-double"></i> <strong><i class="ri-arrow-right-line"></i> Niveau:</strong> {{$subject->level}}</li>
        </ul>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
        <p>{{$subject->description}}</p>
      
      </div>
    </div>

  </div>
</section><!-- End About Section -->

      </div>
    </div>
  </div>

  <script src="{!! url('styles/assets/libs/jquery/dist/jquery.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! url('styles/assets/js/sidebarmenu.js') !!}"></script>
  <script src="{!! url('styles/assets/js/app.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/simplebar/dist/simplebar.js') !!}"></script>
</body>

</html>
