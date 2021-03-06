<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Games!!!</title>
  </head>
  <body>
    <div class="jumbotron">
     <h1 class="display-4">GameFinder!</h1>
     <p class="lead">A page that allowing gamers to add thier favorite games and reviews.</p>
     </p>
    </div>

    @if (Route::has('login'))
<nav class="nav">
  @auth
  <a class="nav-link active" href="{{ route('products.index') }}">Games</a>
  <a class="nav-link" href="{{ route('products.create') }}">Add game</a>
  <a class="nav-link" href="{{ route('reviews.create') }}">Add review</a>
  <a class="nav-link" href="{{ route('logout') }}"
     onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
      {{ __('Sign Out') }}
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
  </form>
  <a class="nav-link" href="{{ route('register') }}">Register</a>
  @else
  <a class="nav-link active" href="{{ route('products.index') }}">Games</a>
  <a class="nav-link" href="{{ route('login') }}">Sign in</a>
  <a class="nav-link" href="{{ route('register') }}">Register</a>
@endauth


</nav>
@endif

<div class="container" style="padding-top: 20px; float:left;">
           @yield("content")
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
