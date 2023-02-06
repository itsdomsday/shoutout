<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- css -->
        <link rel="stylesheet" href="C:\xampp\htdocs\shoutout\resources\css\style.css">

        <!-- icons -->
        <link rel="stylesheet" href="https://kit.fontawesome.com/03e59edb08.css" crossorigin="anonymous">

        <!-- bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->

        <style>
     *{
      margin: 0;
      padding: 0;
      text-decoration: none;
    }

    body{
      box-sizing: border-box;
    }

    .sidebar{
      position: sticky;
      background: #e0e0e0;
      width: 250px;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 1;
    }
    
    .sidebar ul li {
      margin: 25px 0;
    }
    
    .sidebar ul li h4{
      color: #000000;
      margin-left: 20px;
      transition: 0.4s;
    }

    .sidebar h2{
      margin-left: 20px;
    }

    .main{
      margin-left: 220px;
    }
  
    #child{
      margin-left: 250px;
      margin-top: -70px;
      border-radius: 50%;
    }

  .main{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    flex-flow: wrap;
  }
        </style>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="sidebar col-2 position-sticky">
                    <a class="navbar-brand" href="#">
                        <img src="https://w7.pngwing.com/pngs/227/383/png-transparent-franklin-marshall-college-youtube-logo-youtube-blue-text-trademark.png" height="65" width="85" style="margin-left: 10px;   border-radius: 50%;" alt=""
                        loading="lazy" style="border-radius: 50%" />
                    </a>
                    <strong style="float: right; margin-top: 18px; margin-right: 5px"><h1>ShoutOut!</h1></strong> 
                    </br>
                    </br>
                    <h2>Places</h2>
                    <ul class="nav">
                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Friends</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Marketplace</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Groups</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Most Recent</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Events</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Favorites</h4></span>
                        </a>
                    </li>
                    </ul>


                    <h2>Menu</h2>
                    <ul class="nav">
                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Statistics</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Dashboard</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Documents</h4></span>
                        </a>
                    </li>
                    </ul>

                    
                    <h2>Other</h2>
                    <ul class="nav">
                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Settings</h4></span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                        <i class="fas fa-server"></i>
                        <span><h4>Log Out</h4></span>
                        </a>
                    </li>
                    </ul>
                </div>
                <div class="col-7 mt-5">
                    <main>
                      @yield('content')
                    </main>
                </div>
              </div>    
        </div>
    

        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/03e59edb08.js" crossorigin="anonymous"></script>
    </body>
</html>
