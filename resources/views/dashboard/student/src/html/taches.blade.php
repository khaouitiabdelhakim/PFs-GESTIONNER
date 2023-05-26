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
        <h5 style="margin-bottom:25px;">Devoirs No Rendus</h5>
                  <div class="card">
                    <div class="card-header">
                      Tache
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Conception du site</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In cupiditate eaque quas debitis ipsa tempora explicabo nesciunt ut ab sapiente repellat officiis modi similique deleniti quae dolorem, veritatis unde cumque ducimus? Consequuntur ad facere a nisi perspiciatis, quis, esse sit illo nihil natus praesentium soluta dolorum explicabo molestias ab omnis ut iure cumque sint eius? Nihil sit commodi quas temporibus.</p>
                      <a href="#" class="btn btn-primary">Rendre Le Devoir</a>
                    </div>
                  </div>

                  <h5 style="margin-bottom:25px;">Devoirs Traités</h5>

                  <div class="card">
                    <div class="card-header">
                      Tache
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Conception du site</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. In cupiditate eaque quas debitis ipsa tempora explicabo nesciunt ut ab sapiente repellat officiis modi similique deleniti quae dolorem, veritatis unde cumque ducimus? Consequuntur ad facere a nisi perspiciatis, quis, esse sit illo nihil natus praesentium soluta dolorum explicabo molestias ab omnis ut iure cumque sint eius? Nihil sit commodi quas temporibus.</p>
                      
                      <fieldset disabled>
                      <a href="#" class="btn btn-primary">Ce Devoir est terminé</a>
                    </fieldset>
                    </div>
                  </div>
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