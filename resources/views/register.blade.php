<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

  <title>Register {{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  </head>

  <body class="text-center">
  <form class="form-signin" method="post" action="{{ route('register') }}">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.2/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Register form</h1>
      {{ csrf_field() }}
      <label for="inputUsername" class="sr-only">Username</label>
      <input type="text" value="{{ old('username') }}" name="username" id="inputUsername" class="form-control mb-3 {{ $errors->has('username') ? 'is-invalid' : '' }}" placeholder="username" required autofocus>
        @if ($errors->has('username'))
            <div class='invalid-feedback'>
                {{ $errors->first('username') }}
            </div>
        @endif
      <label for="inputEmail" class="sr-only">Email address</label>
     <input type="email" value="{{ old('email') }}" name="email" id="inputEmail" class="form-control mb-3 {{ $errors->has('email') ? 'is-invalid' : ''}}" placeholder="Email address" required autofocus>
    @if ($errors->has('email'))
        <div class='invalid-feedback'>
            {{ $errors->first('email') }}
        </div>
    @endif
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword1" class="form-control mb-3 {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required>
    @if ($errors->has('password'))
        <div class='invalid-feedback'>
            {{ $errors->first('password') }}
        </div>
    @endif
    <input type="password" name="password_confirmation" id="inputPassword2" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" placeholder="Password" required>
    @if ($errors->has('password_confirmation'))
        <div class='invalid-feedback'>
            {{ $errors->first('password_confirmation') }}
        </div>
    @endif
      <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
