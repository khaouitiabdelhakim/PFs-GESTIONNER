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
  <h5 class="card-title fw-semibold mb-4">Informations de l'étudiant</h5>
  <div class="card">
    <div class="card-body">
      <form method="post" action="{{ route('student.change') }}">
          @csrf
      <div class="mb-3">
          <label for="nomEtudiant" class="form-label">Nom</label>
          <input value="{{ $student->last_name}}" name="last_name" type="text" class="form-control" id="nomEtudiant">
        </div>
        <div class="mb-3">
          <label for="nomEtudiant" class="form-label">Prénom</label>
          <input value="{{ $student->first_name}}" name="first_name" type="text" class="form-control" id="nomEtudiant">
        </div>

        <div class="mb-3">
          <label for="nomEtudiant" class="form-label">Filière</label>
          <input value="{{ $student->sector}}" name="sector" type="text" class="form-control" id="nomEtudiant">
        </div>

        <div class="mb-3">
          <label for="nomEtudiant" class="form-label">Niveau</label>
          <input value="{{ $student->level}}" name="level" type="text" class="form-control" id="nomEtudiant">
        </div>
        
        <div class="mb-3">
          <label for="profEmail" class="form-label">Email du Admin</label>
          <input value="{{ $student->email}}" type="email" class="form-control" id="profEmail">
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
        <button type="sumbit" class="btn btn-primary">Enregistrer</button>
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