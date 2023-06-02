<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Title -->
  <title>PFs GESTIONNER - ENSIAS</title>
  <link rel="shortcut icon" type="image/png" href="{!! url('styles/assets/images/logos/favicon.png') !!}" />
  <link rel="stylesheet" href="{!! url('styles/assets/css/styles.min.css') !!}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
      <!-- the side bar -->
      @include('dashboard.group.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.group.src.html.header')

      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="card">
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Titre Du Devoir</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contenu</label>
                      <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Liens externes</label>
                      <input type="text" class="form-control" id="links" value="link 1,link 2, link 3">
                    </div>
                    <button type="submit" class="btn btn-primary">Rendre le devoir</button>
                  </form>
                </div>
              </div>
              <h5 style="margin-bottom:25px;">Devoirs Rendus</h5>
        <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Conception Du Site</h5>
                      <h6 class="card-subtitle mb-2 text-muted">rendu le 14-06-2023</h6>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quos porro fugit, vitae molestias quasi debitis ea nesciunt, inventore dolore repellendus
                         eos minus officia quaerat excepturi quidem aut officiis ipsum.
                         <br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, delectus.</p>
                      
                      <a href="#" class="card-link">Conception PDF</a>
                      <a href="#" class="card-link">Demo App</a>
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