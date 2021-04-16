<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sweet alert cakeshop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  {{-- <link rel="stylesheet" href="/css/shop.css">  --}}
<link rel="stylesheet" href="{{ URL::to('/css/shop.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse mr-5" id="navbarSupportedContent" >
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    
                      @if (Auth::check())
                      <li> <a class="dropdown-item" href="{{ route('User.profile')}}">User Profile</a></li>
                      <div class="dropdown-divider"></div>
                      <li><a class="dropdown-item" href="{{ route('User.logout')}}">Log out</a></li>
                      @else
                      <li> <a class="dropdown-item" href="{{ route('User.signup')}}">signup</a></li>
                      <li><a class="dropdown-item" href="{{ route('User.signin')}}">signin</a></li>
                      @endif
                        
                   
                   
    
                  </ul>
                  {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('User.signup'}}">signup</a>
                    <a class="dropdown-item" href="{{ route('User.signin'}}">signin</a>
                    <div class="dropdown-divider"></div>
    
                    <a class="dropdown-item" href="#">Log out</a>
                  </div> --}}
                </li>
              </ul>
    
            </div>
          </nav>
    </header>
    @yield('content')



    <script src="https://use.fontawesome.com/43ba8b0cf5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>