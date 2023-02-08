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
            border: 2px solid red;
            opacity: 0.9;
        }

        #page-content-wrapper{
            width: 100%;
            position: absolute;
            padding: 15px;
            border: 5px solid green;
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
                <li><a href="#">Account</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#" class="btn btn-success" id="menu-toggle">Toggle Menu</a>
                         <h2><strong>ShoutOut</strong></h2>
                         <p>I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you, I love you,</p>
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