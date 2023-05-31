<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{!! url('styles/assets/images/logos/favicon.png') !!}" />
  <link rel="stylesheet" href="{!! url('styles/assets/css/styles.min.css') !!}" />
  <style>
    body {
      margin-top: 50px; /* Espacement vers le bas */
      text-align: center; /* Centrer le contenu du corps */
    }
      
    h1 {
      margin-top: 20px;
      color: #fff;
      font-size: 24px;
      font-weight: bold;
    }

  </style>
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- the sidebar -->
    @include('dashboard.professor.src.html.sidebar')

    <!-- Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
      <header>
        @include('dashboard.professor.src.html.header')
      </header>

      <div class="container-fluid">
    <!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row content">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <h2>{{Création d'une application web pour la gestion des projets}}</h2>
  </br>
        <ul>
          <li><i class="ti ti-corner-down-right-double"></i> <strong><i class="ri-arrow-right-line"></i> Domaine:</strong> Intelligence artificielle</li>
          </br>
          <li><i class="ti ti-corner-down-right-double"></i> <strong><i class="ri-arrow-right-line"></i> Filière:</strong> Génie logiciel</li>
          </br>
          <li><i class="ti ti-corner-down-right-double"></i> <strong><i class="ri-arrow-right-line"></i> Niveau:</strong> 2A</li>
        </ul>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
        <p>
          L'application web pour la gestion des projets est un outil puissant qui permet aux équipes de gérer efficacement leurs projets. Elle offre des fonctionnalités telles que la création et la planification des tâches, la gestion des ressources, le suivi des progrès, la collaboration en temps réel et la génération de rapports.
        </p>
        <ul>
          <li><i class="ti ti-checks"></i> Facilite la coordination et la communication entre les membres de l'équipe</li>
  </br>
  <li><i class="ti ti-checks"></i> Permet de suivre l'avancement des différentes tâches et de gérer les délais</li>
  </br>  
  <li><i class="ti ti-checks"></i> Fournit des outils de gestion des ressources pour optimiser l'allocation des ressources disponibles</li>
        </ul>
        <p class="fst-italic">
          Cette application web est conçue pour répondre aux besoins des entreprises et des équipes qui souhaitent améliorer leur efficacité et leur productivité dans la gestion de leurs projets.
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

  </br>
          
            <form>
            <h2>Ajouter une tache pour ce projet </h2>
  </br>
              <div class="mb-3">
                <label for="taskTitle" class="form-label">Titre de la Tâche</label>
                <input type="text" class="form-control" id="taskTitle" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="taskContent" class="form-label">Contenu de la Tâche</label>
                <textarea class="form-control" id="taskContent" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="links" class="form-label">Liens externes</label>
                <input type="text" class="form-control" id="links" value="link 1,link 2, link 3">
              </div>
              <button type="submit" class="btn btn-primary">Envoyer la tache</button>
            </form>
  </br> </br> 
<!-- ############################################################################################################ -->
</form>
<h3>Ajouter une grille pour ce projet </h3>
</br>
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


<!-- ############################################################################################################ -->

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
