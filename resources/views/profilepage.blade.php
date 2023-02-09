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
    <title>Shoutout</title>
    <style>
        #sidebar-wrapper{
            z-index: 1;
            position: absolute;
            width: 0;
            height: 100%;
            overflow-y: hidden;
            background: #2c3e50;
            opacity: 0.9;
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
          color: #ddd;
        }

        .sidebar-nav a:hover{
          background: #16a085;  
        }
        
    </style>
</head>
<body>
   <div id="wrapper">
        <!--sidebar-->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li style="padding-top: 5px;"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ36IJ3DSm06icdkeb7kSQ3Vixrnl6bEsk5nA&usqp=CAU" style="border-radius: 50%; width: 30%; height: 50%" alt=""> <h4><strong style="color:white;">ShoutOut</strong></h4>
                <h5 style="color: white; padding-top: 5px;"><strong>Profile</strong></h5>
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
                            <img src="https://e7.pngegg.com/pngimages/48/511/png-clipart-computer-icons-home-home-angle-text-thumbnail.png" style="width: 50px; height: 50px" alt="">
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