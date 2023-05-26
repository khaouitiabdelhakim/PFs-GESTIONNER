<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/login_group_css.css') !!}" rel="stylesheet">

</head>
<body>

<h2>GROUPE</h2>
	<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			
			@csrf
            <div class="social-container">
				<a href="#" class="social"><img width="50px" src="{!! url('images/groupe_setting.png') !!}" class="fab"></img></a>
			</div>
			<h1 style="margin-bottom: 5px;">Créer Groupe</h1>
			<span style="margin-bottom: 25px;">créer un nouveau groupe</span>
			@if ($errors->has('msg_group_signup'))
            <div class="error">
				<p><b>! </b>{{ $errors->first('msg_for_admin') }}</p>
			</div>
            @endif
			<input name="name" type="name" placeholder="nom du groupe  ex: GL212" />
			<input name="password" type="password" placeholder="mot de passe" />
			<input name="password_verification" type="password" placeholder="retapez le mot de passe" />
			<button>Créer</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
		@csrf
            <div class="social-container">
				<a href="#" class="social"><img width="50px" src="{!! url('images/groupe.png') !!}" class="fab"></img></a>
			</div>
			<h1 style="margin-bottom: 5px;">Rejoindre Groupe</h1>
			<span style="margin-bottom: 25px;">se connecter à son groupe</span>
			@if ($errors->has('msg_group_signup'))
            <div class="error">
				<p><b>! </b>{{ $errors->first('msg_for_admin') }}</p>
			</div>
            @endif
			
			<input name="name" type="name" placeholder="nom du groupe" />
			<input name="password" type="password" placeholder="mot de passe" />
			
			<button id="rejoindre">Rejoindre</button>
			<a href="#">Mot de passe du groupe oublié ?</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bonjour!</h1>
				<p>Créez votre groupe en tapant le nom ainsi que le mot de passe pour ce faire</p>
				<button class="ghost" id="signIn">J'ai déja un Groupe</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Bienvenue de retour!</h1>
				<p>Tapez le nom de votre groupe ainsi que son mot de passe pour y accéder</p>
				<button class="ghost" id="signUp">J'ai Pas de Groupe</button>
			</div>
		</div>
	</div>
</div>


    <script src="{!! url('assets/js/login_group_js.js') !!}"></script>
</body>
</html>