<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first city Hotels</title>
     <!-- media query-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap csss-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font/css/fontawesome.min.css">

    <!-- font awesome-->
    <link href="font/css/fontawesome.css" rel="stylesheet">
    <link href="font/css/brands.css" rel="stylesheet">
    <link href="font/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

   <!-- jQuery library -->
   <script src="js/jquery.min.js"></script>
   <!-- Popper JS -->
   <script src="js/popper.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <script src="script.js"></script>
</head>

<style>
    body{
        font-family: 'Segoe UI';
    }

    .nav1{
    width: 100%;
    height: 40px;
    background-color: rgb(232, 220, 220);

}
.nav2{
    width: 100%;
    height: 100px;

}
.navbar{
    position: absolute;
    z-index:10;
    background-color:none;
}
.red{
    color: rgb(155, 72, 12);
}
a{
    text-decoration: none;
    color: black;
}

a:hover{
    text-decoration: none;
    color: black;
}

.ml{
    margin-left: 200px;
}


    
    .abs1{ 
    width: 100%;
    height: 615px;
    position: relative;
    background-image: url("images/ChatGPT Image Jan 10, 2026, 10_49_36 AM.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    
}
.abs2{
    width: 100%;
    height: auto;
    position: absolute;
    align-items: center;
    justify-content: center;
    padding-top: 10%;
    
}

    .home{
    font-family: 'Trebuchet MS';
    font-size: 30px;
    color: black;
}
.home1{
    font-family: 'Trebuchet MS';
    font-size: 60px;
    color: white;
}
.home2{
    width:20%;
    height: auto;
    margin:0 auto;
    justify-content:center;
    text-align:center;
    border-radius:5px;
    background-color:chocolate;
    font-family: 'Trebuchet MS';
    font-size: 20px;
    color: black;
}
.com{
    font-family:;
    font-size:40px;
    color:black;
    font-weight:10px;
    font-family: 'Times New Roman', Times, serif;
}

.box {
    width:100%;
    height:auto;
    background-color: none;
    text-align:center;
    justify-content:center;
}
.boxa{
    width: 80%;
    height:400px;
    
}
.boxb{
    width: 80%;
    height:400px;
    
}
.boxc{
    width: 80%;
    height:400px;
   
}
.boxa1{
    width:100%;
    height:300px;
}
.boxa2{
    width:100%;
    height:50px;
}
.boxa3{
    width:100%;
    height:40px;
    color:white;
    font-size:20px;
    justify-content:center;
    background-color:black;
}
.footer{
    width:100%;
    height:100px;
    color:white;
    background-color:black;
    text-align:center;
    padding-top:30px;
}
/* The Overlay (background) */
.overlay {
  /* Height & width depends on how you want to reveal the overlay (see JS below) */   
  height: 100%;
  width: 0;
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  background-color: rgb(0,0,0); /* Black fallback color */
  background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
  overflow-x: hidden; /* Disable horizontal scroll */
  transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
}

/* Position the content inside the overlay */
.overlay-content {
  position: relative;
  top: 25%; /* 25% from the top */
  width: 100%; /* 100% width */
  text-align: center; /* Centered text/links */
  margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
}

/* The navigation links inside the overlay */
.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block; /* Display block instead of inline */
  transition: 0.3s; /* Transition effects on hover (color) */
}

/* When you mouse over the navigation links, change their color */
.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

/* Position the close button (top right corner) */
.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

/* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
.openbtn{
    width:50px;
    height:40px;
    border:none;
    border-radius:5px;
    color:black;
    background: transparent;
    margin-right:30px;
    margin-left:20px;
}
.one{
    width:100%;
    height:auto;

}
.mt{
    
    margin-top:60px;
    margin-bottom:50px;
    border-radius:20px;
}
.en{
    font-size:50px;
    font-weight:bold;
    color:chocolate;

}
.every{
    color:white;
    font-size:17px;
    padding-top:10px;
    font-family:'Times New Roman', Times, serif;
 }
 .every1{
    color:black;
    font-size:17px;
    padding-top:10px;
    font-family:'Times New Roman', Times, serif;
 }
 .pad{
    padding-top: 100px;
    padding-left:100px;
 }
</style>
<script>
    /* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
<body>


  







    <div class="container-fluid text-center">
        <div class="row">
            <div class="nav1 pt-2">
               <a href="#">
                <i class="fa fa-envelope red"></i> danielnnaji89@gmail.com
               </a>
               <a href="#">
                <i class="fa fa-phone red ml-3"></i> +234-90-3256-2314 
               </a>
            </div>
        </div>
    </div>
    
        
   
        <div class="container-fluid">
            <div class="row">
                <div class=" col-sm-12 col-md-12 col-lg-12 abs1"></div>
                <nav class="navbar navbar-expand-lg mb-3">

                     <!-- The overlay -->
                <div id="myNav" class="overlay">

                <!-- Button to close the overlay navigation -->
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <!-- Overlay content -->
                <div class="overlay-content">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                    <a href="#">Rooms</a>
                    <a href="#">Menu</a>
                </div>

                </div>

                <!-- Use any element to open/show the overlay navigation menu -->
                <button class="openbtn" onclick="openNav()">&#9776;</button>


            <!-- Brand -->
            <a class="navbar-brand ml-6" href="#"><h2>First-city Hotel</h2></a>


            <!-- Navbar links -->
             
        <div class="collapse navbar-collapse navbar-dark" id="collapsibleNavbar">
                <ul class="navbar-nav ml">
                <li class="nav-item">
                <a href="#" class="nav-link ml-2" style=color:black ><h5>Home</h5></a>
                </li>
                <li class="nav-item">
                <a class="nav-link ml-2" style=color:black href="#"><h5>About</h5></a>
                </li>
                <li class="nav-item">
                <a class="nav-link ml-2" style=color:black href="#"><h5>Contact</h5></a>
                </li>
                <li class="nav-item">
                <a class="nav-link ml-2" style=color:black href="#"><h5>Rooms</h5></a>
                </li>
                <li class="nav-item">
                <a class="nav-link ml-2" style=color:black href="#"><h5>Menu</h5></a>
                </li>
                </ul>
        
        </div>
                       
        </nav>
       
                <div class="col-sm-12 col-md-12 col-lg-12 abs2 text-center justify-content-center mt-4">
                   
                    
                    
                    <p class="home1">EXPERIENCE UNPARALLELED LUXURY </p>
                    <p class="home2 align-content-center"><a href="#" >EXPLORE</a></p>
                    
                    
                </div>
            </div>
        </div>
  

        <div class="com text-center mt-3 mb-3">Rooms & Suite</div>

        <div class="container-fluid mt-3">
                <div class="row">
                    <div class=" col-sm-12 col-md-4 col-lg-4 box mb-5">
                        <div class="boxa ml-5">
                            <a href="#">
                                <div class="boxa1">
                                    <img src="images/Siute_njjb9a.jpg" width="95%" height="300px" alt="">
                                </div>
                            </a>
                                 <div class="boxa2 mt-3"><b>Standard Room</b></div>
                            <div class="boxa3 pt-2">#30,000</div>
                        </div>
                    </div>
                    <div class=" col-sm-12 col-md-4 col-lg-4 box mb-5">
                        <div class="boxb ml-5">
                            <a href="#">
                                <div class="boxa1">
                                    <img src="images/bg2-92f20318.jpg" width="100%" height="300px" alt="">
                                </div>
                            </a>
                            <div class="boxa2 mt-3"><b>Executive Room</b></div>
                            <div class="boxa3 pt-2">#40,000</div>
                        </div>
                    </div>
                    <div class=" col-sm-12 col-md-4 col-lg-4 box mb-5">
                        <div class="boxc ml-5">
                            <a href="#">
                                <div class="boxa1">
                                    <img src="images/ChatGPT Image Jan 10, 2026, 10_49_36 AM.png" width="100%" height="300px" alt="">
                                </div>
                            </a>
                            <div class="boxa2 mt-3"><b>Presidential Room</b></div>
                            <div class="boxa3 pt-2">#50,000</div>
                        </div>
                    </div>
                </div>
        </div>



        <div class="container-fluid mt-3">
                <div class="row">
                    <div class=" col-sm-12 col-md-4 col-lg-4 box mb-5">
                        <div class="boxa ml-5">
                            <a href="#">
                                <div class="boxa1">
                                    <img src="images/room (4).jpg" width="100%" height="300px" alt="">
                                </div>
                            </a>
                                 <div class="boxa2 mt-3"><b>Classic Room</b></div>
                            <div class="boxa3 pt-2">#45,000</div>
                        </div>
                    </div>
                    <div class=" col-sm-12 col-md-4 col-lg-4 box mb-5">
                        <div class="boxb ml-5">
                            <a href="#">
                                <div class="boxa1">
                                    <img src="images/Executive_e5qlcu.jpg" width="100%" height="300px" alt="">
                                </div>
                            </a>
                            <div class="boxa2 mt-3"><b>Deluxe Room</b></div>
                            <div class="boxa3 pt-2">#55,000</div>
                        </div>
                    </div>
                    <div class=" col-sm-12 col-md-4 col-lg-4 box mb-5">
                        <div class="boxc ml-5">
                            <a href="#">
                                <div class="boxa1">
                                    <img src="images/luxury.jpg" width="100%" height="300px" alt="">
                                </div>
                            </a>
                            <div class="boxa2 mt-3"><b>kingly Room</b></div>
                            <div class="boxa3 pt-2">#60,000</div>
                        </div>
                    </div>
                </div>
        </div>
         
        <div class="container-fluid bg-dark one">
            <div class="row">
               
                  <div class="col-sm-12 col-md-6 col-lg-6 pad">
                    <span class="en">Enjoy Our Luxuries</span> <br>
                    <p class="every">
                        Everything to make your stay comfortable and memorable <br>

                    ✓ 24/7 Internet Access <br>
                    ✓ Premium Bedding & Linen <br>
                    ✓ Tasteful delicacies <br>
                    ✓ Room Service <br>
                    ✓ In-Room Safe <br>
                    </p>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                       <img src="images/luxury (1).jpg" class="mt" width="90%" height="400px" alt="">
                  </div>
               
            </div>
        </div>


        <div class="container-fluid bg-light one">
            <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                       <img src="images/laundry.jpeg" class="mt ml-2" width="90%" height="400px" alt="">
                  </div>

                  <div class="col-sm-12 col-md-6 col-lg-6 pad">
                    <span class="en">Laundry & Dry Cleaning Services</span> <br>
                    <p class="every1">
                        Enjoy a hassle-free stay with our premium laundry and dry cleaning services. Whether it’s a delicate outfit or everyday wear, our skilled team ensures each garment is meticulously cleaned, pressed, and returned fresh and ready to wear. We handle your clothing with care so you can focus on relaxing and enjoying your time with us.
                    </p>
                  </div>
                  
               
            </div>
        </div>


        <div class="footer">
            Copyright @ 2026 First-City Hotel, Home Of Luxury
        </div>
</body>
</html>