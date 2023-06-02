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
  <h5 class="card-title fw-semibold mb-4">Informations du groupe</h5>
  <div class="card">
    <div class="card-body">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
      <form>
        <div class="mb-3">
          <label for="filiere" class="form-label">Filière</label>
          <select class="form-select" id="filiere">
            <option value="">Sélectionnez une filière</option>
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
          <label for="niveau" class="form-label">Niveau</label>
          <select class="form-select" id="niveau">
            <option value="">Sélectionnez un niveau</option>
            <option value="1A">1A</option>
            <option value="2A">2A</option>
            <option value="3A">3A</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="profEncadrant" class="form-label">Professeur encadrant</label>
          <select class="form-select" id="profEncadrant">
            <option value="">Sélectionnez un professeur encadrant</option>
            <option value="Professeur A">Professeur A</option>
            <option value="Professeur B">Professeur B</option>
            <option value="Professeur C">Professeur C</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="emailMembres" class="form-label">Emails des membres</label>
          <div id="emailContainer">
            <input type="email" class="form-control mb-2" id="memberEmail1">
          </div>
          <button type="button" class="btn btn-secondary" onclick="addEmailField()">Ajouter e-mail</button>
        </div>
        <div class="mb-3">
          <label for="profPassword" class="form-label">Mot de passe</label>
          <div class="input-group">
            <input value="motdepasse" type="password" class="form-control" id="profPassword">
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
  var emailCount = 1;

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

  function addEmailField() {
    emailCount++;
    var emailContainer = document.getElementById("emailContainer");
    var newEmailField = document.createElement("input");
    newEmailField.type = "email";
    newEmailField.classList.add("form-control");
    newEmailField.classList.add("mb-2");
    newEmailField.id = "memberEmail" + emailCount;
    emailContainer.appendChild(newEmailField);
  }

  function saveChanges() {
    var filiere = document.getElementById("filiere").value;
    var niveau = document.getElementById("niveau").value;
    var profEncadrant = document.getElementById("profEncadrant").value;
    var emailMembres = getEmails();
    var profPassword = document.getElementById("profPassword").value;

    // Effectuer ici les opérations nécessaires pour enregistrer les modifications

    // Exemple d'affichage des nouvelles valeurs (à supprimer dans votre application réelle)
    console.log("Nouvelle filière: " + filiere);
    console.log("Nouveau niveau: " + niveau);
    console.log("Nouveau professeur encadrant: " + profEncadrant);
    console.log("Nouveaux emails des membres: " + emailMembres);
    console.log("Nouveau mot de passe: " + profPassword);
  }

  function getEmails() {
    var emails = [];
    for (var i = 1; i <= emailCount; i++) {
      var emailField = document.getElementById("memberEmail" + i);
      if (emailField.value.trim() !== "") {
        emails.push(emailField.value.trim());
      }
    }
    return emails.join(", ");
  }

  // Définir les valeurs par défaut pour les champs de sélection
  document.getElementById("filiere").value = "BI&A";
  document.getElementById("niveau").value = "2A";
  document.getElementById("profEncadrant").value = "Professeur B";
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