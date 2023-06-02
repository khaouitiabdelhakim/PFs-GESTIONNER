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
        <div class="card">
          <div class="card-body">
          @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

            <form method="post" action="{{ route('add.task') }}">
          @csrf
              <div class="mb-3">
                <label for="projectSelect" class="form-label">Nom du Projet</label>
                <select name="group_id" class="form-select" id="projectSelect">
                  @foreach($groups as $group)
                  <option value="{{$group->id}}">{{$group->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="taskTitle" class="form-label">Titre de la Tâche</label>
                <input name="title" type="text" class="form-control" id="taskTitle" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="taskContent" class="form-label">Contenu de la Tâche</label>
                <textarea name="description" class="form-control" id="taskContent" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Envoyer la tache</button>
            </form>
          </div>
        </div>
        <script src="{!! url('styles/assets/libs/jquery/dist/jquery.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! url('styles/assets/js/sidebarmenu.js') !!}"></script>
  <script src="{!! url('styles/assets/js/app.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/simplebar/dist/simplebar.js') !!}"></script>
          
        </body>
        </html> 
