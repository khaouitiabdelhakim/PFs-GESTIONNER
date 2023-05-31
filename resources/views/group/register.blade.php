<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{ route('register.group') }}">

<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">

<h1 class="h3 mb-3 fw-normal">Register</h1>

<div class="form-group form-floating mb-3">
    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="GL212" required="required" autofocus>
    <label for="floatingEmail">Email address</label>
    @if ($errors->has('email'))
        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
    @endif
</div>

<div class="form-group form-floating mb-3">
    <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
    <label for="floatingPassword">Password</label>
    @if ($errors->has('password'))
        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
    @endif
</div>

<div class="form-group form-floating mb-3">
    <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
    <label for="floatingConfirmPassword">Confirm Password</label>
    @if ($errors->has('password_confirmation'))
        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
    @endif
</div>

<button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>


</form>
</body>
</html>