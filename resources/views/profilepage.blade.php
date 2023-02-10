<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!DOCTYPE html>
<html lang="en">
    <title>Shoutout</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');

        *{
            font-family: 'Roboto Slab', serif;
        }

        body{
            background: whitesmoke;
        }

        /* sidebar */
#wrapper {
  padding-left: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
#wrapper.toggled {
  padding-left: 250px;
}
#sidebar-wrapper {
  z-index: 1;
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: rgb(5, 68, 104);
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
#wrapper.toggled #sidebar-wrapper {
  width: 250px;
}
#page-content-wrapper {
  width: 100%;
  position: absolute;
  padding: 15px;
}
#wrapper.toggled #page-content-wrapper {
    padding-left: 250px;
}
/* Sidebar Styles */

.sidebar-nav {
    padding: 0;
    list-style: none;
}
.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px;
}
.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: white;
}
.sidebar-nav li a:hover {
  text-decoration: none;
  color: white;
  background: #16a085;
}
.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  text-decoration: none;
}
.sidebar-nav > .sidebar-brand {
  height: 65px;
  font-size: 18px;
  line-height: 60px;
}
.sidebar-nav > .sidebar-brand a {
  color: #999999;
}
.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none;
}
@media(min-width:768px) {
  #wrapper {
    padding-left: 250px;
  }
  #wrapper.toggled {
    padding-left: 0;
  }
  #sidebar-wrapper {
    width: 250px;
  }
  #wrapper.toggled #sidebar-wrapper {
    width: 0;
  }
  #page-content-wrapper {
    padding: 20px;
    position: relative;
  }
  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
  }
}
        #wrapper #sidebar-wrapper .profile h4{
            color: white;
            text-align: center;
            margin: 10px 0 5px;

        }
        #wrapper #sidebar-wrapper .profile p{
            color: rgb(206, 204, 253);
            text-align: center;
            font-size: 14px;
        }
        #wrapper #sidebar-wrapper .profile img{
            display: block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>
   <div id="wrapper">
        <!--sidebar-->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
            <div class="profile"><img src="./img/1.jpg" alt="">
                <h4>Shirone Fortuno</h4>
                <p>Full-stack Web Developer</p>
            </div>
                
                </li>
                <ul class="sidebar-nav">
                <li><h4 style="color: white;">Profile</h4></li>
                </ul>
                <li><a href="#"> 
                    <span><i class="fa-solid fa-message"></i></span>
                    <span>Messages</span></a></li>
                
                <li><a href="#">
                    <span><i class="fa-solid fa-signs-post"></i></span>
                    <span>Posts</span></a></li>

                <li><a href="#">
                    <span><i class="fa-regular fa-image"></i></span>
                    <span>Gallery</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Entertainment</h4></li>

                <li><a href="#"> 
                    <span><i class="fa-solid fa-tv"></i></span>
                    <span>Watch Videos</span></a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-music"></i></span>
                    <span>Listen to Music</span</a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-podcast"></i></span>
                    <span>Podcast</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Engagements</h4></li>

                <li><a href="#"> 
                    <span><i class="fa-solid fa-user-group"></i></span>
                    <span>Friends</span></a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-users"></i></span>
                    <span>Followers</span></a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-user-plus"></i></span>
                    <span>Following</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Activities</h4></li>

               <li><a href="#">
                    <span><i class="fa-solid fa-store"></i></span>
                    <span>Marketplace</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Account</h4></li>
                
                    <li><a href="#">
                    <span><i class="fa-solid fa-gear"></i></span>
                    <span>Settings</span></a></li>
                    
                    <li><a href="#">
                    <span><i class="fa-solid fa-sliders"></i></span>
                    <span>Others</span></a></li>
                    
                    <li><a href="#">
                    <span><i class="fa-solid fa-right-from-bracket"></i></span>
                    <span>Log Out</span></a></li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" class="btn" id="menu-toggle"><img src="https://img.freepik.com/free-vector/illustrationn-megaphone-monochrome-style-isolated-white-background_1284-38767.jpg" style="border-radius: 50%; width: 50px; height: 50px;" alt=""></a></div>
                        <div class="col-xs-12 col-md-2">
                        </div>
                    
                        <div class="container-fluid">
                                    <div class="row">
                                    <div class="col-xs-12 col-md-6" style="background: lightblue;"><h3>Profile</h3>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div>
                                <iframe class="ratio ratio-4x3" style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/Cj3AV92fJ90"></iframe>
                                    </div>
                                </div>
                    </div>
            </div>
        </div>
   </div> 
   <script>
        $("#menu-toggle").click( function(e){
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        } );
   </script>
</body>
</html>