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
      @include('dashboard.group.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.group.src.html.header')

      <div class="container-fluid">
        <!--  Row 1 -->
        <h5 style="margin-bottom:25px;">Devoirs No Rendus</h5>
                  @foreach ($tasks as $task)
                  <div class="card">
                    <div class="card-header">
                      Nouvelle Tache
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$task->title}}</h5>
                      <p class="card-text">{{$task->description}}</p>
                      <a href="devoir/{{$task->id}}" class="btn btn-primary">Rendre Le Devoir</a>
                    </div>
                  </div>
                  @endforeach

                  <h5 style="margin-bottom:25px;">Devoirs Traités</h5>

                  @foreach ($done_tasks as $done_task)
                  <div class="card">
                    <div class="card-header">
                      Tache
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{$done_task->title}}</h5>
                      <p class="card-text">{{$done_task->description}}</p>
                      
                      <fieldset disabled>
                      <a href="#" class="btn btn-primary">Ce Devoir est terminé</a>
                    </fieldset>
                    </div>
                  </div>
                  @endforeach
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