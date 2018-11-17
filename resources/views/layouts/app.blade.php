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
    </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
