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
    }

    body{
      box-sizing: border-box;
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
    margin-top: 80px;
  }
  .aboutcontent{
    display: flex;
    margin-left: 300px;
    float: left;
    border-radius: 25px;
    margin-top: 10px;
    background-image: linear-gradient(to bottom right, skyblue , lightyellow);
    padding-bottom: 10px;
    word-break: break-all;
    white-space: pre-wrap;
  }

  .album img{
    transition: 1s;
    padding: 5px;
  }
  .album img:hover{
    filter:grayscale(50%);
    transform: scale(1.1);
  }
  </style>
</head>
<body>

  <div class="sidebar">
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
      
      <div class="main">
    <main style="margin-top: -5px;">
  <div class="container pt-1"></div>
  <div style="float: left; margin: 40px ;">
          <img src="https://cdn4.iconfinder.com/data/icons/facebook-and-social-media-2/64/Facebook_and_Social_Media-11-512.png" height="50" alt="">
          <h3 style="float: right; margin: 10px;">Weekly Friends </h3>
        </div>

        <div style="float: left; margin: 40px ;">
          <img src="https://cdn-icons-png.flaticon.com/512/2977/2977815.png" height="45" alt="">
           	<h3 style="float: right; margin: 10px;">Weekly Followers </h3>
            </div>
        
        <div style="float: left; margin: 40px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJOIdtka4kzZFal6HYSh-EUFxiJ5TeVTSKSkoJ4BOt_5qRmBZW38RMyVrHwrP9128XKAE&usqp=CAU" height="55" alt="">
           <h3 style="float: right; margin: 10px;">Weekly Following </h3>
        </div>
        
        <div style="float: left; margin: 40px;">
        <img src="https://png.pngtree.com/png-vector/20220702/ourmid/pngtree-television-icon-logo-vector-illustration-design-png-image_5672312.png" height="55" alt="">
           <h3 style="float: right; margin: 10px;">Watch </h3>
        </div>

        <div style="float: left; margin: 40px;">
        <img src="https://png.pngtree.com/png-vector/20191208/ourmid/pngtree-beautiful-photo-album-glyph-vector-icon-png-image_2084717.jpg" height="55" alt="">
           <h3 style="float: right; margin: 10px;">Album </h3>
        </div>

         <div style="float: left; margin: 40px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUAMLwfxVieHHK6Bv_CX1X41OW-RkZxoxuE3yAAH6fjuQEeDHQUh3dfkIrtPZFg_VBJ8o&usqp=CAU" height="55" alt="">
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

      <div class="album" style="float: left;">
      
      <a href="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.6435-9/129314832_3612613648796830_6724460720046237658_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGspCHYIBfe6x5hQIxcYXOC0gu2MzgbvBPSC7YzOBu8E_1d6DFLgMcah40D4C9rcQf0Cg1vWIi0Ot7uBSd8Z9xo&_nc_ohc=I2I9tziR494AX-mxaNk&_nc_ht=scontent.fmnl4-1.fna&oh=00_AfB2CF8H7Awyxujc_PkokKpaw_72SoiQY98xqYfZWNijaA&oe=6409B016"><img src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.6435-9/129314832_3612613648796830_6724460720046237658_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeGspCHYIBfe6x5hQIxcYXOC0gu2MzgbvBPSC7YzOBu8E_1d6DFLgMcah40D4C9rcQf0Cg1vWIi0Ot7uBSd8Z9xo&_nc_ohc=I2I9tziR494AX-mxaNk&_nc_ht=scontent.fmnl4-1.fna&oh=00_AfB2CF8H7Awyxujc_PkokKpaw_72SoiQY98xqYfZWNijaA&oe=6409B016" height="300" alt="images"></a>

      <a href="https://scontent.fcrk4-1.fna.fbcdn.net/v/t1.6435-9/61497496_2287926681265540_8510780303239806976_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeHNZ6N24_SChU47XIPbi_ODcaEyyVUQ-8hxoTLJVRD7yC4Oob2-QHqMQpGsCx9--NP88GsKQ6yf9Z0Qtmr8TvVe&_nc_ohc=dOEl6xIsEhgAX9JjsLh&tn=jpUEIVEff-V9z0JH&_nc_ht=scontent.fcrk4-1.fna&oh=00_AfB7ANVXptBpgrR3rqPx1HA8rPQQFk-RlqSiZyijwgI3Gg&oe=6408E257"><img src="https://scontent.fcrk4-1.fna.fbcdn.net/v/t1.6435-9/61497496_2287926681265540_8510780303239806976_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeHNZ6N24_SChU47XIPbi_ODcaEyyVUQ-8hxoTLJVRD7yC4Oob2-QHqMQpGsCx9--NP88GsKQ6yf9Z0Qtmr8TvVe&_nc_ohc=dOEl6xIsEhgAX9JjsLh&tn=jpUEIVEff-V9z0JH&_nc_ht=scontent.fcrk4-1.fna&oh=00_AfB7ANVXptBpgrR3rqPx1HA8rPQQFk-RlqSiZyijwgI3Gg&oe=6408E257" height="300" alt=""></a>

      <a href="https://scontent.fcrk4-1.fna.fbcdn.net/v/t1.6435-9/58763350_2238447429546799_3979491966604804096_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeHyPyt9Lr3xNYnhztXR56NY2laFc3qNOEPaVoVzeo04Q4MwjxIRh2Cl1UovJ7VzLZFGuyIboWGP9vwbqcUvYf-c&_nc_ohc=QVSkkx9o3w0AX92xsUT&_nc_ht=scontent.fcrk4-1.fna&oh=00_AfBciiKP3hUz5W3btXbKPHGyIhk8WncQaQY8FrPwbtKIAQ&oe=6408D3D9"><img src="https://scontent.fcrk4-1.fna.fbcdn.net/v/t1.6435-9/58763350_2238447429546799_3979491966604804096_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeHyPyt9Lr3xNYnhztXR56NY2laFc3qNOEPaVoVzeo04Q4MwjxIRh2Cl1UovJ7VzLZFGuyIboWGP9vwbqcUvYf-c&_nc_ohc=QVSkkx9o3w0AX92xsUT&_nc_ht=scontent.fcrk4-1.fna&oh=00_AfBciiKP3hUz5W3btXbKPHGyIhk8WncQaQY8FrPwbtKIAQ&oe=6408D3D9" height="300" alt=""></a>

      <a href="https://scontent.fcrk4-1.fna.fbcdn.net/v/t31.18172-8/22459478_1527645933960289_8849104674690725844_o.jpg?_nc_cat=101&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeFNLQ4j3Or0u14zYtS1BsCQ51YHtLfzzhPnVge0t_POEwGRV7z_XTlfQSy0aFhMgPW8ZbsoSDQl-5jTptMDLAS5&_nc_ohc=XKlTupjNE2cAX8tJor3&_nc_oc=AQkRJ9coZ2QgIGDkMogCHPb1vZGIsH6AAY7lVPMThmzJ2Aq74wUDk-u8WjoUYuD93DU&_nc_ht=scontent.fcrk4-1.fna&oh=00_AfADX93B4OgesddmzaTb22xk5JR84GCoyCwPEYMiP77UrQ&oe=6408EC4F"><img src="https://scontent.fcrk4-1.fna.fbcdn.net/v/t31.18172-8/22459478_1527645933960289_8849104674690725844_o.jpg?_nc_cat=101&ccb=1-7&_nc_sid=19026a&_nc_eui2=AeFNLQ4j3Or0u14zYtS1BsCQ51YHtLfzzhPnVge0t_POEwGRV7z_XTlfQSy0aFhMgPW8ZbsoSDQl-5jTptMDLAS5&_nc_ohc=XKlTupjNE2cAX8tJor3&_nc_oc=AQkRJ9coZ2QgIGDkMogCHPb1vZGIsH6AAY7lVPMThmzJ2Aq74wUDk-u8WjoUYuD93DU&_nc_ht=scontent.fcrk4-1.fna&oh=00_AfADX93B4OgesddmzaTb22xk5JR84GCoyCwPEYMiP77UrQ&oe=6408EC4F" height="300" alt=""></a>
      </div>
</body>

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
      </html>
