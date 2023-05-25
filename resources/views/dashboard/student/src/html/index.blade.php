<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{!! url('styles/assets/images/logos/favicon.png') !!}" />
  <link rel="stylesheet" href="{!! url('styles/assets/css/styles.min.css') !!}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
      <!-- the side bar -->
      @include('dashboard.student.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.student.src.html.header')

      <div class="container-fluid">
        <!--  Row 1 -->
        <p>hello from dahsboard</p>
        <p>{{$student->email}}</p>
      </div>
    </div>
  </div>
  
  <script src="{!! url('styles/assets/libs/jquery/dist/jquery.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! url('styles/assets/js/sidebarmenu.js') !!}"></script>
  <script src="{!! url('styles/assets/js/app.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/apexcharts/dist/apexcharts.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/simplebar/dist/simplebar.js') !!}"></script>
  <script src="{!! url('styles/assets/js/dashboard.js') !!}"></script>
</body>

</html>