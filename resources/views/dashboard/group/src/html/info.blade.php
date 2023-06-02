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

        <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Informations du groupe</h5>
              <div class="card">
                <div class="card-body">
                  <form method="post" action="{{ route('group.change') }}">
          @csrf
                  <div class="mb-3">
                      <label for="exampleInputText1" class="form-label">Nom du groupe</label>
                      <input value="{{$group->name}}" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="profPassword" class="form-label">Mot de passe</label>
                      <div class="input-group">
                        <input name="password" value="changez votre password" type="password" class="form-control" id="profPassword">
                        <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()">
                          <i id="passwordVisibilityIcon" class="ti ti-eye text-dark"></i>
                        </button>
                      </div>
                    </div>
                      <label for="exampleInputEmail1" class="form-label">Emails des membres du groupe</label>
                      @foreach($membres as $membre)
                      <input value="{{$membre->email}}" style="margin-top:15px;"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     @endforeach
                    </div>
                    <button style="margin-left:30px; margin-right:30px;" type="sumbit" class="btn btn-primary">Enregistrer</button>
                  </form>
                </div>
              </div>
            </div>   
            
            <script>
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById("profPassword");
    var passwordVisibilityIcon = document.getElementById("passwordVisibilityIcon");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      passwordVisibilityIcon.classList.remove("ti ti-eye");
      passwordVisibilityIcon.classList.add("ti ti-eye-closed");
    } else {
      passwordInput.type = "password";
      passwordVisibilityIcon.classList.remove("ti ti-eye-closed");
      passwordVisibilityIcon.classList.add("ti ti-eye");
    }
  }

</script>
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