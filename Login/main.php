<!DOCTYPE html>
<html>
<head>
    <title>OPEN PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="magicscroll/magicscroll.css"/>
<script type="text/javascript" src="magicscroll/magicscroll.js"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-image: url("241873-chocolate-wallpaper-top-free-chocolate-background.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        img{
            margin-left:auto;
            margin-right:auto;
            display:block;
        }
        .quotes {
            width: 80vw;
            display: flex;
            min-height: 400px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            z-index: 2;
            box-sizing: border-box;
        }
        .box{
            border-radius: 40px 0px;
        }

            .quotes .box {
                position: relative;
                width: 25vw;
                height: 50vh;
                min-height: 320px;
                background: #f2f2f2;
                overflow: hidden;
                transition: all 0.5s ease-in;
                z-index: 2;
                box-sizing: border-box;
                padding: 30px;
                box-shadow: -10px 25px 50px rgba(0, 0, 0, 0.3);
                border-radius: 5;
            }

                .quotes .box::before {
                    position: absolute;
                    top: -20px;
                    left: 5px;
                    width: 100%;
                    height: 100%;
                    font-size: 120px;
                    opacity: 0.2;
                    background: transparent;
                    pointer-events: none;
                }

                .quotes .box::after {
                    position: absolute;
                    bottom: -10%;
                    right: 5%;
                    font-size: 120px;
                    opacity: 0.2;
                    background: transparent;
                    filter: invert(1);
                    pointer-events: none;
                }

                .quotes .box p {
                    margin: 0;
                    padding: 10px;
                    font-size: 1.2rem;
                }

                .quotes .box h2 {
                    position: absolute;
                    margin: 0;
                    padding: 0;
                    bottom: 10%;
                    right: 10%;
                    font-size: 1.5rem;
                }

                .quotes .box:hover {
                    color: #f2f2f2;
                    box-shadow: 20px 50px 100px rgba(0, 0, 0, 0.5);
                }

            .quotes .bg {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 1;
                opacity: 0;
                transition: all 0.5s ease-in;
                pointer-events: none;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            .quotes .box.box1:hover,
            .quotes .box.box1:hover ~ .bg{
                opacity: 1;
                background: #e2a9e5;
                background: -moz-linear-gradient(-45deg, #e2a9e5 15%, #2b94e5 100%);
                background: -webkit-linear-gradient(-45deg, #e2a9e5 15%,#2b94e5 100%);
                background: linear-gradient(135deg, #e2a9e5 15%,#2b94e5 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2a9e5', endColorstr='#2b94e5',GradientType=1 );
            }
            

            .quotes .box.box2:hover,
            .quotes .box.box2:hover ~ .bg {
                opacity: 1;
                background: #632c65;
                background: -moz-linear-gradient(-45deg, #632c65 15%, #56a5e2 100%);
                background: -webkit-linear-gradient(-45deg, #632c65 15%,#56a5e2 100%);
                background: linear-gradient(135deg, #632c65 15%,#56a5e2 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#632c65', endColorstr='#56a5e2',GradientType=1 );
            }

            .quotes .box.box3:hover,
            .quotes .box.box3:hover ~ .bg {
                opacity: 1;
                background: #4b384c;
                background: -moz-linear-gradient(-45deg, #4b384c 15%, #da5de2 100%);
                background: -webkit-linear-gradient(-45deg, #4b384c 15%,#da5de2 100%);
                background: linear-gradient(135deg, #4b384c 15%,#da5de2 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4b384c', endColorstr='#da5de2',GradientType=1 );
            }

        @media (max-width:767px) {
            .quotes {
                width: 100%;
                padding: 20px;
            }

                .quotes .box {
                    width: 100%;
                    margin-bottom: 20px;
                }
        }
        nav{
            background: #171c24;
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            height: 70px;
            padding: 0 100px;
        }
        nav .logo{
        color: #fff;
        font-size: 30px;
        font-weight: 600;
        letter-spacing: -1px;
        }
        nav .nav-items{
        display: flex;
        flex: 1;
        padding: 0 0 0 40px;
        }
        nav .nav-items li{
        list-style: none;
        padding: 0 15px;
        }
        nav .nav-items li a{
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        text-decoration: none;
        }
        nav .nav-items li a:hover{
        color: #ff3d00;
        }
        nav form{
        display: flex;
        height: 40px;
        padding: 2px;
        background: #1e232b;
        min-width: 18%!important;
        border-radius: 2px;
        border: 1px solid rgba(155,155,155,0.2);
        }
        nav form .search-data{
        width: 100%;
        height: 100%;
        padding: 0 10px;
        color: #fff;
        font-size: 17px;
        border: none;
        font-weight: 500;
        background: none;
        }
        nav form button{
        padding: 0 15px;
        color: #fff;
        font-size: 17px;
        background: #ff3d00;
        border: none;
        border-radius: 2px;
        cursor: pointer;
        }
        nav form button:hover{
        background: #e63600;
        }
        nav .menu-icon,
        nav .cancel-icon,
        nav .search-icon{
        width: 40px;
        text-align: center;
        margin: 0 50px;
        font-size: 18px;
        color: #fff;
        cursor: pointer;
        display: none;
        }
        nav .menu-icon span,
        nav .cancel-icon,
        nav .search-icon{
        display: none;
        }
        .image_sec{
            display: flex;
        }
        .about{
            color: white;
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq-3lDL5btyVkxwYkaLuanCXJe13WYGzpZDA&usqp=CAU");
            padding: 40px;
            border: 1px solid white;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }




        * {box-sizing: border-box;}
        body {font-family: Verdana, sans-serif;}
        .mySlides {display: none;}
        img {vertical-align: middle;}
        .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        }
        .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active {
        background-color: #717171;
        }
        .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
        }
    </style>
    
</head>
<body onload="changeImage()">
    <nav>
        <div class="menu-icon">
           <span class="fas fa-bars"></span>
        </div>
        <div class="logo">
           <img src="image0.jpeg" height="50px" width="50px">
        </div>
        <div class="nav-items">
           <li><a href="#">Home</a></li>
           <li><a href="#">Collection</a></li>
           <li><a href="#">Offer</a></li>
           <li><a href="#">Contact</a></li>
           <li><a href="#">Feedback</a></li>
        </div>
        <div class="search-icon">
           <span class="fas fa-search"></span>
        </div>
        <div class="cancel-icon">
           <span class="fas fa-times"></span>
        </div>
        <form action="#">
           <input type="search" class="search-data" placeholder="Search" required>
           <button type="submit" class="fas fa-search"></button>
        </form>
     </nav><br><br>

     <div >
                <div class="slideshow-container">

                    <div class="mySlides fade">
                    <img src="https://i.pinimg.com/474x/a2/fb/ab/a2fbabb5055a0ab6e5f10671705fa71d--wallpaper-backgrounds-wallpapers.jpg" style="width:1000px;border: 10px solid white;border-radius: 20px;">
                    </div>

                    <div class="mySlides fade">
                    <img src="https://thumbs.dreamstime.com/b/chocolate-bar-spice-ingredients-making-candy-hot-cake-dark-top-view-218646969.jpg" style="width:1000px;border: 10px solid white;border-radius: 20px;">
                    </div>

                    <div class="mySlides fade">
                    <img src="https://img.frenchwomendontgetfat.com/wp-content/uploads/2015/03/23924910715_642cc1b5c7_z.jpg" style="width:1000px;border: 10px solid white;border-radius: 20px;">
                    </div>

                </div>
                <br>

                <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
                </div>

                <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
                }
                </script>

     </div>
     <br><br>
     <div>
        

     </div>
    <div class="card">

        <div class="quotes">
            <div class="card">
                <div class="box box1" onclick="window.location.href = 'natural.html';">
                    <img src="image0.jpeg" height="100px" width="100px"/>
                    <p><br /><h1 align="center">Natural<br /> handcrafted <br />chocolate</h1> </p>
                </div>
                
            </div>
            <div class="card">
                <div class="box box2" onclick="window.location.href = 'organic.html';">
                    <img src="image0.jpeg" height="100px" width="100px" />
                    <p><br /><h1 align="center">Only <br />organic <br />ingredients</h1></p>
                </div>
            </div>
            <div class="card">
                <div class="box box3" onclick="window.location.href = 'healthy.html';">
                    <img src="image0.jpeg" height="100px" width="100px" />
                    <p><br /><h1 align="center">Healthy sweets<br /> without suger</h1></p>
                </div>
            </div>
            
        </div>
    </div>
    <br><br>
    
    <br><br>
    <hr color="white">
    <div class="about">
        <h1 align="center" >ABOUT</h1><br>
        <h3 align="center">We here provide you the way to buy products, know product and get product</h3><br>
        <img src="image0.jpeg" height="200" width="200"><br>
        <h1 align="center"><b>Headquarters</b>: India, Tirupati</h1><br>
        <h1 align="center"><b>Annual sales</b>: 10cr</h1><br>
        <h1 align="center"><b>Employees</b>: 1000+</h1><br>
        <p align="center"><h2>Celebrating its 1st anniversary last year, bloom has long been a leading producer of premium chocolate renowned for its quality cocoa and signature truffles. More recently, the Swiss chocolate-making giant has been in the spotlight for its bean-to-bar strategy, successfully reaching a milestone of 100% traceable and verified cocoa beans. </h2></p>
        <br><br>
    </div>
    <br><br><br><br>

</body>
</html>