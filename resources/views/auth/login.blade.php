<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/login_css.css') !!}" rel="stylesheet">

</head>
<body>
    <h2>S'indentifier</h2>
<div class="container" id="container">

    <div id="admin-container" class="form-container admin-sign-in-container admin-container-hidden">
		<form method="post" action="{{ route('admin.login') }}">
    		@csrf
            <div class="social-container">
				<a href="#" class="social"><img width="50px" src="{!! url('images/admin.png') !!}" class="fab"></img></a>
			</div>
			<h1 style="margin-bottom: 5px;">Se Connecter</h1>
			<span style="margin-bottom: 25px;">en tant qu'administrateur</span>
			@if ($errors->has('msg_for_admin'))
            <div class="error">
				<p><b>! </b>{{ $errors->first('msg_for_admin') }}</p>
			</div>
            @endif
			
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<a href="#">Mot de passe oublié ?</a>
			<button type="submit">Se Connecter</button>
            <button class="ghost3" id="notAdmin" style="margin-top: 30px;">Sortir</button>
		</form>
	</div>
    
	<div class="form-container student-sign-in-container">
	<form method="post" action="{{ route('student.login') }}">
    		@csrf
			<div class="social-container">
				<a href="#" class="social"><img width="70px" src="{!! url('images/student.png') !!}"  class="fab"></img></a>
			</div>
			<h1 style="margin-bottom: 5px;">Se Connecter</h1>
			<span style="margin-bottom: 25px;">en tant qu'étudiant</span>
			@if ($errors->has('msg_for_student'))
            <div class="error">
				<p><b>! </b>{{ $errors->first('msg_for_student') }}</p>
			</div>
            @endif
			
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<a href="#">Mot de passe oublié ?</a>
			<button type="submit">Se Connecter</button>
		</form>
	</div>
	<div class="form-container professor-sign-in-container">
		<form method="post" action="{{ route('professor.login') }}">
    		@csrf
			<div class="social-container">
				<a href="#" class="social"><img width="70px" src="{!! url('images/professor.png') !!}"  class="fab"></img></a>
			</div>
			<h1 style="margin-bottom: 5px;">Se Connecter</h1>
			<span style="margin-bottom: 25px;">en tant qu'enseigant</span>
			@if ($errors->has('msg_for_professor'))
            <div class="error">
				<p><b>! </b>{{ $errors->first('msg_for_professor') }}</p>
			</div>
            @endif
			
			<input name="email" type="email" placeholder="Email" />
			<input name="password" type="password" placeholder="Password" />
			<a href="#">Mot de passe oublié ?</a>
			<button type="submit">Se Connecter</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bonjour Professeur!</h1>
				<p>Veuillez vous connecter en utilisant vos informations personnelles</p>
				<button class="ghost" id="signIn">Je suis Etudiant</button>
                <button class="ghost2" id="admin1" style="margin-top: 30px;">Je suis Administrateur</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Salut Etudiant!</h1>
				<p>Veuillez vous connecter en utilisant vos informations personnelles</p>
				<button class="ghost" id="signUp">Je suis Professeur</button>
                <button class="ghost2" id="admin2" style="margin-top: 30px;">Je suis Administrateur</button>
			</div>
		</div>
	</div>
</div>


    <script src="{!! url('assets/js/login_js.js') !!}"></script>
</body>
</html>