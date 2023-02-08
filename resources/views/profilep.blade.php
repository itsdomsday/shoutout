<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      text-decoration: none;
      font-family: Arial ;
    }

    body{
      box-sizing: border-box;
      background-image: linear-gradient(to bottom right, white , skyblue);
    }

    .sidebar{
      position: fixed;
      background-image: linear-gradient(to bottom right, skyblue , lightyellow);
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
    margin-left: 220px;
  }

  .about{
    display: flex;
    margin-left: 300px;
    float: left;
    margin-top: 20px;
  }
  .aboutcontent{
    display: flex;
    margin-left: 270px;
    float: left;
    border-radius: 25px;
    margin-top: 10px;
    background-image: linear-gradient(to bottom right, skyblue , lightyellow);
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    word-break: break-all;
    white-space: pre-wrap;
    margin-bottom: 20px;
  }

  .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  opacity: 1; 
  cursor: pointer; 
  border-radius: 25px;
}

.column img:hover {
  opacity: 0.8;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: black;
  font-size: 35px;
  cursor: pointer;
  border-radius: 25%;
}

  /* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
  </style>
</head>
<body>

  <div class="sidebar">
  <a class="navbar-brand" href="#">
        <img src="https://w7.pngwing.com/pngs/227/383/png-transparent-franklin-marshall-college-youtube-logo-youtube-blue-text-trademark.png" height="65" width="85" style="margin-left: 10px; margin-top: 5px; border-radius: 50%;" alt=""
          loading="lazy" style="border-radius: 50%" />
    </a>
    <strong style="float: right; margin-top: 18px; margin-right: 17px"><h2>ShoutOut!</h2></strong> 
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
      
      <div class="main">
    <main style="margin-top: -5px;">
  <div class="container pt-1"></div>
        <div style="float: left; margin: 40px ;">
          <img src="https://cdn-icons-png.flaticon.com/512/2977/2977815.png" height="45" alt="">
           	<h3 style="float: right; margin: 10px;">Weekly Followers </h3>
            </div>
        
        <div style="float: left; margin: 40px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJOIdtka4kzZFal6HYSh-EUFxiJ5TeVTSKSkoJ4BOt_5qRmBZW38RMyVrHwrP9128XKAE&usqp=CAU" height="55" alt="" style="border-radius: 25%">
           <h3 style="float: right; margin: 10px;">Weekly Following </h3>
        </div>
        
        <div style="float: left; margin: 40px;">
        <img src="https://png.pngtree.com/png-vector/20220702/ourmid/pngtree-television-icon-logo-vector-illustration-design-png-image_5672312.png" height="55" alt="" style="border-radius: 25%">
           <h3 style="float: right; margin: 10px;">Watch </h3>
        </div>

        <div style="float: left; margin: 40px;">
        <img src="https://png.pngtree.com/png-vector/20191208/ourmid/pngtree-beautiful-photo-album-glyph-vector-icon-png-image_2084717.jpg" height="55" alt="" style="border-radius: 25%">
           <h3 style="float: right; margin: 10px;">Album </h3>
        </div>

         <div style="float: left; margin: 40px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUAMLwfxVieHHK6Bv_CX1X41OW-RkZxoxuE3yAAH6fjuQEeDHQUh3dfkIrtPZFg_VBJ8o&usqp=CAU" height="55" alt="" style="border-radius: 25%">
           <h3 style="float: right; margin: 10px; margin-left: 5px">Stories </h3>
        </div>
</div>
</main>


<div style="float: left; margin: 40px;">
       <a href=""><img src="https://scontent.fcrk4-1.fna.fbcdn.net/v/t1.6435-9/134156035_3679434545448073_7107774170773165511_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFo2PavscfqpCSE5kVbyZm_eYtrk1plQTN5i2uTWmVBMyaM9n2wybEbHRib9VL4M1fICRx93AYEAv6c7VOcMkUj&_nc_ohc=pT9fpkk9xaIAX806Vp8&tn=jpUEIVEff-V9z0JH&_nc_ht=scontent.fcrk4-1.fna&oh=00_AfDE9ILTCfjMvOcawulUWhVTqUFHe7z7vJqUtwmc80hxwQ&oe=6408D696" alt="" height="100" id="child"></a> 
       <div><strong><h3 style="margin-left: 250px;">Shirone Fortuno</h3></strong></div>  
      

      <div style="float: left; margin-left: 250px;">
      <a href="" style="color: #000000;">Post</a>
      </div>
      <div style="float: left; margin-left: 5px;">
      <a href="" style="color: #000000;">Followers</a>
      </div>
      <div style="float: left; margin-left: 5px;">
      <a href="" style="color: #000000;">Following</a>
      </div>
      </div>
<table>
  <tr class="row">
  <td class="column">
  <img src="https://images.pexels.com/photos/3265460/pexels-photo-3265460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Nature" style="width:100%; height: 98%" onclick="myFunction(this);">
  </td>
  
  <td class="column">
    <img src="https://images.pexels.com/photos/1761279/pexels-photo-1761279.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Nature" style="width:100%; height: 98%" onclick="myFunction(this);">
  </td>

  <td class="column">
    <img src="https://images.pexels.com/photos/1770809/pexels-photo-1770809.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 " alt="Nature" style="width:100%; height: 98%" onclick="myFunction(this);">
  </td>

  <td class="column">
    <img src="https://images.pexels.com/photos/3408744/pexels-photo-3408744.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Snow" style="width:100%; height: 98%" onclick="myFunction(this);">
  </td>

  <td class="column">
    <img src="https://images.pexels.com/photos/624015/pexels-photo-624015.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Mountains" style="width:100%; height: 98%" onclick="myFunction(this);">
  </td>
  
  <td class="column">
    <img src="https://images.pexels.com/photos/3244513/pexels-photo-3244513.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Lights" style="width:100%; height: 98%" onclick="myFunction(this);">
  </td>
</tr>
</table>

  <div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:50%;">
  <div id="imgtext"></div>
      </div>
   

      <div class="about">
                <h1>About</h1>
</div>


      <div class="aboutcontent">
      <p> 
      This is a Professional WebsiteType Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of WebsiteType, with a focus on dependability and        
      WebsiteSpeciality. We're working to turn our passion for WebsiteType into a booming online website. We hope you enjoy our WebsiteType as much as we enjoy offering them to you.
      I will keep posting more important posts on my Website for all of you. Please give your support and love.
      Thanks For Visiting Our Site
      Have a nice day!</p> 
      </div>      
      <script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>

</body>
      </html>
