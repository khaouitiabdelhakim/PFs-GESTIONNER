<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PFs GESTIONNER - ENSIAS</title>
  <link rel="shortcut icon" type="image/png" href="{!! url('styles/assets/images/logos/favicon.png') !!}" /> <link rel="stylesheet" href="{!! url('styles/assets/css/styles.min.css') !!}" />
  <link rel="stylesheet" href="{!! url('assets/css/chat_css.css') !!}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    
      <!-- the side bar -->
      @include('dashboard.student.src.html.sidebar')

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- the header -->
    @include('dashboard.student.src.html.header')

      <div  class="xhat-box">
        <!--  Row 1 -->
      
        
        <div   class="px-4 py-5 chat-box bg-white">

        <!-- for nothing Message-->
        <div class="message sender">
          <div class="message-body">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p style="50px" class="text-small mb-0 text-muted"></p>
            </div>
          </div>
        </div>

        @foreach ($messages as $message)
        @if ($student->id == $message->user_id)
 
        <!-- Sender Message-->
        <div class="message sender">
          <div class="message-body">
            <div class="bg-light rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-muted">{{$message->message}}</p>
            </div>
            <p class="small text-muted">{{ \Carbon\Carbon::parse($message['created_at'])->format('H:i')  }}</p>
          </div>
        </div>

        @else
        <!-- Receiver Message-->
        <div class="message receiver">
          <div class="message-body">
            <div class="bg-primary rounded py-2 px-3 mb-2">
              <p class="text-small mb-0 text-white">{{$message->message}}</p>
            </div>
            <p class="small text-muted">{{ \Carbon\Carbon::parse($message['created_at'])->format('H:i')  }}</p>
          </div>
        </div>

        @endif
        @endforeach
       
        
      </div>


     

       

      </div>

      <!-- Typing area -->
      <form style="margin:30px; border-radius:10px"  action="#" class="bg-light" method="post" action="{{ route('student.send') }}">
          @csrf
        <div style="border-radius:10px"  class="input-group">
          <input name="message" type="text" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
          <div class="input-group-append">
            <button id="button-addon2" type="submit" class="btn btn-link"> <i style="width:40px"  class="ti ti-send"></i></button>
          </div>
        </div>
      </form>

   

        
</div>




      </div>
    </div>
  </div>

  <!-- Add this script at the end of your HTML body -->
<script>
  // Scroll the chat box to the bottom
  function scrollToBottom() {
    var chatBox = document.querySelector('.chat-box');
    chatBox.scrollTop = chatBox.scrollHeight;
  }

  // Execute the scrollToBottom function on page load
  window.addEventListener('load', function() {
    scrollToBottom();
  });
</script>


  <script src="{!! url('styles/assets/libs/jquery/dist/jquery.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
  <script src="{!! url('styles/assets/js/sidebarmenu.js') !!}"></script>
  <script src="{!! url('styles/assets/js/app.min.js') !!}"></script>
  <script src="{!! url('styles/assets/libs/simplebar/dist/simplebar.js') !!}"></script>
 
</body>

</html>