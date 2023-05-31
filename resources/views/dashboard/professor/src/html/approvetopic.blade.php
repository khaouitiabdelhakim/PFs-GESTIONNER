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
      @include('dashboard.professor.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.professor.src.html.header')

      <div class="container-fluid">
        <!--  Row 1 -->

        <div class="row">
  <div class="col-lg-12 mb-4">
    <h3>Sujets non approuvés</h3>
    <table id="table-non-approuves" class="table">
      <thead>
        <tr>
          <th></th>
          <th>ID du groupe</th>
          <th>Niveau</th>
          <th>Filière</th>
          <th>Titre du sujet</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox"></td>
          <td>1</td>
          <td>1A</td>
          <td>BI&A</td>
          <td>Une Application Web de Gestion de stock</td>
          <td>Description du projet 1</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>2</td>
          <td>2A</td>
          <td>GD</td>
          <td>Un Système de Gestion de Base de Données</td>
          <td>Description du projet 2</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>3</td>
          <td>3A</td>
          <td>GL</td>
          <td>Un Site Web de Commerce Électronique</td>
          <td>Description du projet 3</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>4</td>
          <td>1A</td>
          <td>IDSIT</td>
          <td>Une Application Mobile de Suivi des Activités Sportives</td>
          <td>Description du projet 4</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>5</td>
          <td>2A</td>
          <td>SSI</td>
          <td>Un Logiciel de Gestion des Ressources Humaines</td>
          <td>Description du projet 5</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>6</td>
          <td>3A</td>
          <td>SSE</td>
          <td>Un Système de Réservation en Ligne</td>
          <td>Description du projet 6</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>7</td>
          <td>1A</td>
          <td>2SCL</td>
          <td>Projet 7</td>
          <td>Description du projet 7</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>8</td>
          <td>2A</td>
          <td>BI&A</td>
          <td>Projet 8</td>
          <td>Description du projet 8</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>9</td>
          <td>3A</td>
          <td>GD</td>
          <td>Projet 9</td>
          <td>Description du projet 9</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>10</td>
          <td>1A</td>
          <td>GL</td>
          <td>Projet 10</td>
          <td>Description du projet 10</td>
        </tr>
      </tbody>
    </table>
    
    <div class="text-center mt-4">
      <button type="button" class="btn btn-primary" onclick="selectAll()">Sélectionner tout</button>
      <input type="submit" class="btn btn-primary" value="Envoyer" onclick="moveSelectedRows()">
    </div>

    <h3 class="mt-4">Sujets approuvés</h3>
    <table id="table-approuves" class="table">
      <thead>
        <tr>
          <th></th>
          <th>ID du groupe</th>
          <th>Niveau</th>
          <th>Filière</th>
          <th>Titre du sujet</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <!-- Les sujets approuvés seront ajoutés ici -->
      </tbody>
    </table>

    <div class="text-center mt-4">
     
    </div>
  </div>
</div>

<script>
  function selectAll() {
    var checkboxes = document.querySelectorAll('#table-non-approuves input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
      checkbox.checked = true;
    });
  }

  function moveSelectedRows() {
    var selectedRows = Array.from(document.querySelectorAll('#table-non-approuves tbody input[type="checkbox"]:checked'))
      .map(function(checkbox) {
        var row = checkbox.parentNode.parentNode;
        checkbox.parentNode.removeChild(checkbox);
        return row;
      });

    var tableApprouves = document.querySelector('#table-approuves tbody');
    selectedRows.forEach(function(row) {
      tableApprouves.appendChild(row);
    });
  }
</script>


        <!-- 
          
        <div class="row">
  <div class="col-lg-12 mb-4">
    <table class="table">
      <thead>
        <tr>
          <th></th>
          <th>ID du groupe</th>
          <th>Niveau</th>
          <th>Filière</th>
          <th>Titre du sujet</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox"></td>
          <td>1</td>
          <td>1A</td>
          <td>BI&A</td>
          <td>Une Application Web de Gestion de stock</td>
          <td>Description du projet 1</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>2</td>
          <td>2A</td>
          <td>GD</td>
          <td>Un Système de Gestion de Base de Données</td>
          <td>Description du projet 2</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>3</td>
          <td>3A</td>
          <td>GL</td>
          <td>Un Site Web de Commerce Électronique</td>
          <td>Description du projet 3</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>4</td>
          <td>1A</td>
          <td>IDSIT</td>
          <td>Une Application Mobile de Suivi des Activités Sportives</td>
          <td>Description du projet 4</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>5</td>
          <td>2A</td>
          <td>SSI</td>
          <td>Un Logiciel de Gestion des Ressources Humaines</td>
          <td>Description du projet 5</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>6</td>
          <td>3A</td>
          <td>SSE</td>
          <td>Un Système de Réservation en Ligne</td>
          <td>Description du projet 6</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>7</td>
          <td>1A</td>
          <td>2SCL</td>
          <td>Projet 7</td>
          <td>Description du projet 7</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>8</td>
          <td>2A</td>
          <td>BI&A</td>
          <td>Projet 8</td>
          <td>Description du projet 8</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>9</td>
          <td>3A</td>
          <td>GD</td>
          <td>Projet 9</td>
          <td>Description du projet 9</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>10</td>
          <td>1A</td>
          <td>GL</td>
          <td>Projet 10</td>
          <td>Description du projet 10</td>
        </tr>
        </tbody>
    </table>
    
    <form action="submit.php" method="POST">
  <button type="button" class="btn btn-primary" onclick="selectAll()">Sélectionner tout</button>
  <input type="submit" class="btn btn-primary" value="Envoyer">
</form>

      
  </div>
</div>

<script>
  function selectAll() {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
      checkbox.checked = true;
    });
  }
</script>

-->
                      
              
                  
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