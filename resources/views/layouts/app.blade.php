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
      height: 100%;
      top: 0;
      left: 0;
      z-index: 1;
    }
    
    .sidebar ul li {
      margin: 15px 0;
    }
    
    .sidebar ul li h4{
      color: #634BFF;
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
        <div class="container">
            <div class="row">
                <div class="sidebar col-md-2">
                  @include('layouts.nav')
                </div>
                <div class="col-md-8 mt-5">
                    <main>
                      @yield('content')
                    </main>
                </div>
                <div class="col-md-2 mt-5 ">
                    @include('layouts.trending')
                </div>
              </div>    
        </div>
    

        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/03e59edb08.js" crossorigin="anonymous"></script>
    </body>
</html>
