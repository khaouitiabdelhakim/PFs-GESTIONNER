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
      @include('dashboard.admin.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.admin.src.html.header')

      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="card-body">
  <h5 class="card-title fw-semibold mb-4">Informations du professeur</h5>
  <div class="card">
    <div class="card-body">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
      <form method="post" action="{{ route('professor.register') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="mb-3">
          <label for="nomEtudiant" class="form-label">Nom de l'enseignant</label>
          <input name="last_name" type="text" class="form-control" id="nomEtudiant">
        </div>
        <div class="mb-3">
          <label for="nomEtudiant" class="form-label">Prénom de l'enseignant</label>
          <input name="first_name" type="text" class="form-control" id="nomEtudiant">
        </div>
        <div class="mb-3">
          <label for="filiere" class="form-label">Filière</label>
          <select name="sector" class="form-select" id="filiere">
            <option value="BI&A">BI&A</option>
            <option value="GD">GD</option>
            <option value="GL">GL</option>
            <option value="IDSIT">IDSIT</option>
            <option value="SSI">SSI</option>
            <option value="SSE">SSE</option>
            <option value="2SCL">2SCL</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="admin" class="form-label">Statut admin</label>
          <select name="admin" class="form-select" id="admin">
            <option value="Non">Non</option>
            <option value="Oui">Oui</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="emailMembres" class="form-label">Email de l'enseignant</label>
          <input name="email" type="email" class="form-control" id="emailEtudiant">
        </div>
        <div class="mb-3">
          <label for="profPassword" class="form-label">Mot de passe</label>
          <div class="input-group">
            <input name="password" value="motdepasse" type="password" class="form-control" id="profPassword">
            <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()">
              <i id="passwordVisibilityIcon" class="ti ti-eye text-dark"></i>
            </button>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
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