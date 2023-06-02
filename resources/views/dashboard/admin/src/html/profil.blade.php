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
  <h5 class="card-title fw-semibold mb-4">Informations du Admin</h5>
  <div class="card">
    <div class="card-body">
      <form>
        <div class="mb-3">
          <label for="profName" class="form-label">Nom</label>
          <input value="{{ $admin->first_name}}" type="text" class="form-control" id="profName">
        </div>

        <div class="mb-3">
          <label for="profName" class="form-label">Prénom</label>
          <input value="{{ $admin->last_name}}" type="text" class="form-control" id="profName">
        </div>
        
        <div class="mb-3">
          <label for="profEmail" class="form-label">Email</label>
          <input value="{{ $admin->email}}" type="email" class="form-control" id="profEmail">
        </div>
        <div class="mb-3">
          <label for="profPassword" class="form-label">Mot de passe</label>
          <div class="input-group">
            <input value="changez votre mot da passe" type="password" class="form-control" id="profPassword">
            <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()">
              <i id="passwordVisibilityIcon" class="ti ti-eye text-dark"></i>
            </button>
          </div>
        </div>
        <button type="button" class="btn btn-primary" onclick="saveChanges()">Enregistrer</button>
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

  function saveChanges() {
    var profName = document.getElementById("profName").value;
    var filiere = document.getElementById("filiere").value;
    var profEmail = document.getElementById("profEmail").value;
    var profPassword = document.getElementById("profPassword").value;

    // Effectuer ici les opérations nécessaires pour enregistrer les modifications

    // Exemple d'affichage des nouvelles valeurs (à supprimer dans votre application réelle)
    console.log("Nouveau nom du professeur: " + profName);
    console.log("Nouvelle filière: " + filiere);
    console.log("Nouvel email du professeur: " + profEmail);
    console.log("Nouveau mot de passe: " + profPassword);
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