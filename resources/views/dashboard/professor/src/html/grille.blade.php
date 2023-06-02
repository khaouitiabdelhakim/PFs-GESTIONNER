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
      @include('dashboard.professor.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.professor.src.html.header')

      <div class="container-fluid">
        <!--  Row 1 -->
        <h2>Ajouter une grille d'Évaluation</h2>
        <div class="card">
  <div class="card-body">
    <form>
      <div class="row mb-3">
        <div class="col">
          <label for="projectSelect" class="form-label">Nom du Projet</label>
          <select class="form-select" id="projectSelect">
            <option value="projet1">Projet 1</option>
            <option value="projet2">Projet 2</option>
            <option value="projet3">Projet 3</option>
          </select>
        </div>
      </div>
      
      <!-- Grille des critères -->
      <!-- ################################################################################# -->
     <!-- Grille des critères -->
     <div class="card">
  <div class="card-body">
    <form>
      <div id="criteriaGrid">
        <div class="row mb-3">
          
        </div>
      </div>

      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary" onclick="addCriterion()">Ajouter un critère</button>
        </div>
      </div>


    </form>
  </div>
</div>

<script>
  let criterionCounter = 2;

  function addCriterion() {
    const criteriaGrid = document.getElementById('criteriaGrid');

    const row = document.createElement('div');
    row.className = 'row mb-3';

    const col = document.createElement('div');
    col.className = 'col';

    const label = document.createElement('label');
    label.className = 'form-label';

    const input = document.createElement('input');
    input.type = 'text';
    input.placeholder = 'Nom du critère';
    input.className = 'form-control';

    const select = document.createElement('select');
    select.className = 'form-select criterion-select';
    select.id = 'criterion' + criterionCounter;

    const defaultOption = document.createElement('option');
    defaultOption.value = '';
    defaultOption.textContent = 'Ajouter un coefficient';
    select.appendChild(defaultOption);

    for (let i = 0; i <= 10; i++) {
      const option = document.createElement('option');
      option.value = i;
      option.textContent = i;
      select.appendChild(option);
    }

    input.addEventListener('input', function() {
      label.textContent = this.value !== '' ? this.value : 'Critère ' + criterionCounter;
    });

    col.appendChild(input);
    col.appendChild(select);
    row.appendChild(col);

    criteriaGrid.appendChild(row);

    // Mettre à jour le label du premier critère si un nom est saisi
    if (criterionCounter === 2 && input.value !== '') {
      document.getElementById('criterionLabel1').textContent = input.value;
    } else {
      label.textContent = 'Critère ' + criterionCounter;
    }

    criterionCounter++;
  }
</script>


            <!-- ################################################################################# -->

</br>
      <button type="submit" class="btn btn-primary">Envoyer </button>
    </form>
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