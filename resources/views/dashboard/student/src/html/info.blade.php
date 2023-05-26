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

        <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Informations du groupe</h5>
              <div class="card">
                <div class="card-body">
                  <form>
                  <div class="mb-3">
                      <label for="exampleInputText1" class="form-label">Nom du groupe</label>
                      <input value="nom du groupe" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                      <div id="passwordHelp" class="form-text">Vous pouvez changer ce mot de passe.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Emails des membres du groupe</label>
                      <input value="someone1@um5.ac.ma" style="margin-top:15px;"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <input value="someone2@um5.ac.ma" style="margin-top:15px;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer les changements</button>
                  </form>
                </div>
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