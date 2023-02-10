<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Shoutout</title>
    <style>
        body{
            background: whitesmoke;
        }

        #sidebar-wrapper{
            z-index: 1;
            position: absolute;
            width: 0;
            height: 100%;
            overflow-y: auto;
            background: rgb(5, 68, 104);
         }

        #page-content-wrapper{
            width: 100%;
            position: absolute;
            padding: 15px;
        }

        #wrapper.menuDisplayed #sidebar-wrapper{
            width: 250px;
        }

        #wrapper.menuDisplayed #page-content-wrapper{
            padding-left: 250px;
        }

        .sidebar-nav{
            padding: 0;
            list-style: none;
        }

        .sidebar-nav li{
            text-indent: 20px;
            line-height: 40px;
        }

        
        .sidebar-nav a{
          display: block;
          text-decoration: none;
          color: white;
        }

        .sidebar-nav a:hover{
          background: #16a085;  
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
                
                <h5 style="color: white; padding-top: 5px; margin-left: 19px"><strong>Profile</strong></h5>
                </li>
                <li><a href="#">Post</a></li>
                <li><a href="#">Galery</a></li>
                <li><a href="#">Media</a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Entertainment</h4></li>
                <li><a href="#">Watch Videos</a></li>
                <li><a href="#">Listen Music</a></li>
                <li><a href="#">Podcast</a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Engagements</h4></li>
                <li><a href="#">Friends</a></li>
                <li><a href="#">Weekly Followers</a></li>
                <li><a href="#">Weekly Following</a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Activities</h4></li>
                <li><a href="#">Marketplace</a></li>
            </ul>

            <ul class="sidebar-nav">
                <li><h4 style="color: white;">Account</h4></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Others</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1">
                        <a href="#" class="btn" id="menu-toggle"><img src="https://images-platform.99static.com/L8-DKxWVDCPob6k95qn75gdWHOc=/20x45:930x955/500x500/top/smart/99designs-contests-attachments/72/72395/attachment_72395224" style="border-radius: 50%; width: 50px; height: 50px;" alt=""></a></div>
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
            $("#wrapper").toggleClass("menuDisplayed ");
        } );
   </script>
</body>
</html>