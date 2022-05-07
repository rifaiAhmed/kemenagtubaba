<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">

    <title>KEMENAG TUBABA | Register</title>
  </head>
  <body>
    
    <main class="form-signin">
        <form method="POST" action="/registrasi">
            @csrf
          <div class="text-center">
            <img class="mb-4 text-center" src="{{ asset('/images/logo.png') }}" alt="" width="100">
          </div>
          <h1 class="h3 mb-3 fw-normal text-center">Silahkan Registrasi</h1>
      
          <div class="form-floating">
            <input type="text" class="form-control @error('name')
                is-invalid
            @enderror" id="name" placeholder="name" name="name" value="{{ old('name') }}">
            <label for="name">Username</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="email" class="form-control @error('email')
                is-invalid
            @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control @error('password')
                is-invalid
            @enderror" id="password" placeholder="Password" name="password">
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback mt-0">
                {{ $message }}
            </div>
            @enderror
          </div>
          <button class="w-100 btn btn-lg btn-success" type="submit">Register</button>
          <small class="d-block mb-2">Sudah Registrasi? <a href="/login">Login</a></small>
          <p class="mt-3 mb-3 text-muted text-center">&copy; 2022 kemenag tubaba</p>
        </form>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>