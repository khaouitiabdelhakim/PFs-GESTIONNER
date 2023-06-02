<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PFs GESTIONNER - ENSIAS</title>
  <link rel="shortcut icon" type="image/png" href="{!! url('styles/assets/images/logos/favicon.png') !!}" /> <link rel="stylesheet" href="{!! url('styles/assets/css/styles.min.css') !!}" />
</head>

<body>
 <!-- Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
  data-sidebar-position="fixed" data-header-position="fixed">
  <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="row justify-content-center w-100">
        <div class="col-md-8 col-lg-6 col-xxl-3">
          <div class="card mb-0">
            <div class="card-body">
              <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="{!! url('styles/assets/images/logos/logo.png') !!}" width="180" alt="">
              </a>
              <p class="text-center">facilite la gestion</p>
              <form>
              <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre email" aria-describedby="emailHelp">
</div>

                <div class="text-center mb-4">
                  <button type="button" class="btn btn-primary" onclick="recoverPassword()">Récupérer mon mot de passe</button>
                </div>
                <div id="recoveryMessage" class="text-center" style="display: none;">
                  Un lien a été envoyé à votre adresse email.
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function recoverPassword() {
    var email = document.getElementById('exampleInputEmail1').value;
    if (email !== '') {
      // Envoyer le lien de récupération de mot de passe à l'adresse email fournie
      document.getElementById('recoveryMessage').style.display = 'block';
    }
  }
</script>
</body>


</html>