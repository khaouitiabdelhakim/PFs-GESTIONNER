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
        <div class="card">
                <div class="card-body">
                  <form  method="post" action="{{ route('upload.work') }}">
          @csrf
          <input type="hidden" name="task_id" value="{{$task->id}}">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Titre Du Devoir</label>
                      <input value="{{$task->title}}" name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contenu</label>
                      <textarea name="description"  type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Liens externes</label>
                      <input name="attatchment"  type="text" class="form-control" id="links" value="link 1,link 2, link 3">
                    </div>
                    <button type="submit" class="btn btn-primary">Rendre le devoir</button>
                  </form>
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