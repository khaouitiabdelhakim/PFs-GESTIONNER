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

                    @if(count($choices) > 0)
                    <h5 style="margin-bottom:25px;">Voilà la liste des sujets que nous avons choisi</h5>
                      
                    @endif
                      
                      @foreach( $choices as $choice)
                      <div class="card">
                        <div class="card-header">
                        {{$choice->level}} - {{$choice->sector}}
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">{{$choice->title}}</h5>
                          <p class="card-text">{{$choice->description}}</p>
                          <form action="{{ route('remove.choice') }}" method="POST">
                            @csrf
                            <input type="hidden" name="subject_id" value="{{$choice->id}}">
                            <button type="submit" class="btn btn-outline-danger m-1">Annuler</button>
                        </form>

                        </div>
                      </div>
                  @endforeach

                  @if(count($subjects) > 0)
                  <h5 style="margin-bottom:25px;">Voilà la liste des sujets disponibles. N'hésitez pas à choisir le sujet qui vous intéresse le plus ou à demander plus de détails sur l'un d'entre eux !</h5>
                      @endif
                  @foreach( $subjects as $subject)
                      <div class="card">
                        <div class="card-header">
                        {{$subject->level}} - {{$subject->sector}}
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">{{$subject->title}}</h5>
                          <p class="card-text">{{$subject->description}}</p>
                          <form action="{{ route('make.choice') }}" method="POST">
                            @csrf
                            <input type="hidden" name="subject_id" value="{{$subject->id}}">
                            <button type="submit" class="btn btn-outline-success m-1">Choisir</button>
                        </form>

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