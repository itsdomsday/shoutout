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
            background: lightblue;
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
    padding-left: 20px;
}

#toplinks a:link,
#toplinks a:focus{
    text-decoration: none;
    font-size: 20px;
    color: black;
}
/* Sidebar Styles */

.sidebar-nav {
  top: 0;
  width: 250px;
  margin: 0;
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


/* Top Nav Style*/      
.topnav {
  overflow: hidden;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav .search-container {
  float: left;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: auto;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
/*Profile body*/
#pbleft{
  float: left;
  width: 50%
} 
#pbright{
  float: left;
  width: 50%
} 

#postsection{
  background: white;
  border-radius: 10px;
  width: 500px;
  height: 300px;
  display: flex;
  justify-content: center;
  align-items: center;
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
                    <span> Messages</span></a></li>
                
                <li><a href="#">
                    <span><i class="fa-solid fa-signs-post"></i></span>
                    <span> Posts</span></a></li>

                <li><a href="#">
                    <span><i class="fa-regular fa-image"></i></span>
                    <span> Gallery</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Entertainment</h4></li>

                <li><a href="#"> 
                    <span><i class="fa-solid fa-tv"></i></span>
                    <span> Watch Videos</span></a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-music"></i></span>
                    <span> Listen to Music</span</a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-podcast"></i></span>
                    <span> Podcast</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Engagements</h4></li>

                <li><a href="#"> 
                    <span><i class="fa-solid fa-user-group"></i></span>
                    <span> Friends</span></a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-users"></i></span>
                    <span> Followers</span></a></li>

                <li><a href="#">
                    <span><i class="fa-solid fa-user-plus"></i></span>
                    <span> Following</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Activities</h4></li>

               <li><a href="#">
                    <span><i class="fa-solid fa-store"></i></span>
                    <span> Marketplace</span></a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Account</h4></li>
                
                    <li><a href="#">
                    <span><i class="fa-solid fa-gear"></i></span>
                    <span> Settings</span></a></li>
                    
                    <li><a href="#">
                    <span><i class="fa-solid fa-sliders"></i></span>
                    <span> Others</span></a></li>
                    
                    <li><a href="#">
                    <span><i class="fa-solid fa-right-from-bracket"></i></span>
                    <span> Log Out</span></a></li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1">
                        <a href="#" class="btn" id="menu-toggle">
                            <img src="https://img.freepik.com/free-vector/illustrationn-megaphone-monochrome-style-isolated-white-background_1284-38767.jpg" style="border-radius: 50%; width: 50px; height: 50px;" alt="">
                        </a>
                    </div>

                    <!--top nav/ searchbar-->
                      <div class="col-lg-3" id="toplinks">
                        <div class="topnav">
                          <div class="search-container">
                              <form action="/action_page.php">
                                <input type="text" placeholder="Search.." name="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                              </form>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-3" id="toplinks">
                          <a href="#" style="color: black;">
                              <span><i class="fa-solid fa-people-group"></i></span>
                                  <span>Groups</span>
                          </a>    
                      </div>
                                 
                      <div class="col-lg-3" id="toplinks">
                          <a href="#" style="color: black;">
                              <span><i class="fa-solid fa-gamepad"></i></span>
                                  <span>Gaming</span>
                          </a>    
                      </div>
                     
                      <div class="col-lg-2" id="toplinks">
                          <a href="#" style="color: black;">
                              <span><i class="fa-sharp fa-solid fa-cloud-sun"></i></span>
                                  <span>Stories</span>
                          </a>
                      </div>
                      <!--top nav/ searchbar-->
<!--profilebody content-->
<div id="pbleft">
    <div class="wrapper" id="postsection">
      <form action="" method="post" class="form">
        <textarea name="message" id="" cols="30" rows="10" class="message" placeholder="What's on your mind?" style="text: italic;"></textarea>
        <button type="submit" class="btn">Post</button>
      </form> 

    </div>
</div>
<div id="pbright">
  <iframe class="ratio ratio-4x3" style="background: black; width: 100%; height: 500px; border-radius: 5%;" src="https://www.youtube.com/embed/iQbpwSCMcF4"></iframe>
  <iframe class="ratio ratio-4x3" style="background: black; width: 100%; height: 500px; border-radius: 5%;" src="https://www.youtube.com/embed/Cj3AV92fJ90"></iframe>
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