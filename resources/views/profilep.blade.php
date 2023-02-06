<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">        

        <title>Laravel</title>
        <style>
            body {
    background-color: #fbfbfb;
    }
    @media (min-width: 991.98px) {
    main {
    padding-left: 240px;
    }
    }
    
    /* Sidebar */
    .sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    padding: 58px 0 0; /* Height of navbar */
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
    width: 240px;
    z-index: 600;
    }
    
    @media (max-width: 991.98px) {
    .sidebar {
    width: 100%;
    }
    }
    .sidebar .active {
    border-radius: 5px;
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }
    
    .sidebar-sticky {
    position: relative;
    top: 0;
    height: calc(100vh - 48px);
    padding-top: 0.5rem;
    overflow-x: hidden;
    overflow-y: auto;
    }
        </style>

    </head>
    <body class="antialiased">
      <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <!-- Collapse -->
        <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
          data-mdb-toggle="collapse" href="#collapseExample1" aria-expanded="true"
          aria-controls="collapseExample1">
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span><h4>SOCIAL</h4></span>
        </a>

        <ul id="collapseExample1" class="collapse show list-group list-group-flush">
          <li class="list-group-item py-1">
            <a href="" class="text-reset" style="text-decoration: none">Facebook</a>
          </li>
          <li class="list-group-item py-1">
            <a href="" class="text-reset" style="text-decoration: none">Instagram</a>
          </li>
          <li class="list-group-item py-1">
            <a href="" class="text-reset" style="text-decoration: none">Twitter</a>
          </li>
          <li class="list-group-item py-1">
            <a href="" class="text-reset" style="text-decoration: none">Telegram</a>
          </li>
        </ul>

        <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
          data-mdb-toggle="collapse" href="#collapseExample1" aria-expanded="true"
          aria-controls="collapseExample1">
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span><h4>MENU</h4></span>
        </a>

        <ul id="collapseExample1" class="collapse show list-group list-group-flush">
          <li class="list-group-item py-1">
            <a href="" class="text-reset" style="text-decoration: none">Statistics</a>
          </li>
          <li class="list-group-item py-1">
            <a href="" class="text-reset" style="text-decoration: none">Dashboard</a>
          </li>
          <li class="list-group-item py-1">
            <a href="" class="text-reset" style="text-decoration: none">Documents</a>
          </li>
        </ul>

        <a class="list-group-item list-group-item-action py-2 ripple" aria-current="true"
          data-mdb-toggle="collapse" href="#collapseExample1" aria-expanded="true"
          aria-controls="collapseExample1">
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span><h4>OTHERS</h4></span>
        </a>

        <ul id="collapseExample1" class="collapse show list-group list-group-flush">
          <li class="list-group-item py-1">
            <a href="" class="text-reset" style="text-decoration: none">Settings</a>
          </li>
          <li class="list-group-item py-1">
            <a href="" class="text-reset" style="text-decoration: none">Log Out</a>
          </li>
        </ul>
        <!-- Collapse 1 -->
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img src="https://i.pinimg.com/originals/82/49/cb/8249cba5c97d9b5b2df24a15f5c31580.png" height="55" width="60" alt=""
          loading="lazy" style="border-radius: 50%" /> <strong> ShoutOut!</strong>
      </a>
  </nav>
  <!-- Navbar -->
</header>

<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-1"></div>

  <div style="float: left; margin: 40px ;">
          <img src="https://cdn4.iconfinder.com/data/icons/facebook-and-social-media-2/64/Facebook_and_Social_Media-11-512.png" height="50" alt="">
          <h5 style="float: right; margin: 10px;">Friends </h5>
        </div>

  <div style="float: left; margin: 40px ;">
          <img src="https://cdn-icons-png.flaticon.com/512/2977/2977815.png" height="45" alt="">
           	<h5 style="float: right; margin: 10px;">Followers </h5>
            </div>
        
        <div style="float: left; margin: 40px ;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJOIdtka4kzZFal6HYSh-EUFxiJ5TeVTSKSkoJ4BOt_5qRmBZW38RMyVrHwrP9128XKAE&usqp=CAU" height="55" alt="">
           <h5 style="float: right; margin: 10px;">Following </h5>
        </div>
        <div>hello</div>
</main>
<!--Main layout-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
