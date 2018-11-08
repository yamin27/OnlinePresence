<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Updaytes | Sign in</title>
        <meta content="{{ csrf_token() }}" name="csrf-token">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    </head>

    <body class="text-center">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="h3 mb-3 font-weight-normal">Please sign in</h3>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Email address" value="{{ old('email') }}" required>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block signin-btn" type="submit">
                Sign in
            </button>
        </form>
    </body>

    </html>