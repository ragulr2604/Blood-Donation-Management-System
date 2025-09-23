<?php

 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='./Images/bb_logo(white).png' type="image/png">
    <link rel="stylesheet" href='index.css'>
    <link rel="stylesheet" href='https://fontawesome.com/v4.7.0/icon/bars'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<title>Blood management System</title>
<div class="preloader">
    <img src="pre-loader.svg" alt="spinner"> 
</div>


<body>
    <!--Scroll to top button-->
    <button onclick="topFunction()" id="myBtn" class="fas fa-arrow-up"></button>
    <!-- Home Page -->
    <header>
        <video autoplay muted loop plays-inline id="homevideo">
            <source src="./video/Safe Blood For All.mp4" type="video/mp4">
        </video>
        <div id="logo"> <img src="./img/blood_vector_icon.png">
        
        <h3><b>Blood Buddy</b></h3>
        
        </div>
        <div id="nav">
            
            <div class="header-list" id="headerl">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a class="scroll" href="request.php">Request for Blood</a></li>
                    <li><a class="scroll" href="userlog/usersearchdonors.php">Search for Blood</a></li>
                    <li><a class="scroll" href="adminlogin.php">Admin</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
        <div class="text-box">
            <h1> Start </h1>
            <h1>Saving Lives </h1>
            <p>Become a donor or request for blood And help save lives</p>
            <a href='userlog/patient.php' class="hero-btn" target="_blank">Donate</a>
        </div>
    </header>

    <!--list-->
    <main>
        <section id="about-us">
            <div class="about">
            <div class="row">
                    <div class="about-col">
                        <div class="image">
                            <img src="./img/patientlist.png">
                        </div>
                        <h3 ><a href="totalreq.php"  style="text-decoration: none;color:black;">Blood Request</a></h3>
                        <p></p>
                    </div>
                    
                    <div class="about-col">
                        <div class="image">
                            <img src="./images/dlist.png">
                        </div>
                        <h3><a href="userlog/viewdonors.php" style="text-decoration: none;color:black">Donor List</a></h3>
                        <p></p>
                    </div>


            </div>
            </div>
        </section>
    </main>



    <!--ABOUT US -->

    
    <main>
        <section id="about-us">
            <div class="about">
                <h1 class="heading">What is this all about ?</h1> <br>
                <p class="head-des" class="text">We solve the problem of blood emergencies by connecting <span
                        class="one-line"><br></span> blood donors directly with people in blood need. </p>
                <div class="row">
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/drop.png">
                        </div>
                        <h3>What we do ?</h3>
                        <p>We connect blood donors with recipients, without any intermediary such as blood banks, for an
                            efficient and seamless process.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/innovation.png">
                        </div>
                        <br>
                        <h3>Innovative</h3>
                        <p>Blood Buddy is an innovative approach to address global health.We provide <span>immediate
                                access</span> to blood donors.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/netwotk.png">
                        </div>
                        <h3>Network</h3>
                        <p>Blood Buddy is one of several community organizations working together as a network that
                            responds to emergencies in an efficient manner.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/noti.png">
                        </div>
                        <h3>Get notified</h3>
                        <p>Blood Buddy Connect works with network partners to connect blood donors and recipients
                            through an automated SMS service and a mobile app.</p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/cost.png">
                        </div>
                        <h3>Totally Free</h3>
                        <p>Blood Budyy's ultimate goal is to provide an easy -to-use, easy-to-access, fast, efficient,
                            and reliable way to get life-saving blood, totally <span>Free of cost.</span></p>
                    </div>
                    <div class="about-col">
                        <div class="image">
                            <img src="./Images/save.png">
                        </div>
                        <h3>Save Life</h3>
                        <p>We are a non profit foundation and our main objective is to make sure that everything is done
                            to protect vulnerable persons.<span>Help
                                us by making a gift!</span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <!--Javascript for pre-loader-->

    <script>
        const preloader = document.querySelector('.preloader');
        const fadeEffect = setInterval(() => {
            if (!preloader.style.opacity) {
                preloader.style.opacity = 1;
            }
            if (preloader.style.opacity > 0) {
                preloader.style.opacity -= 1.5;
            } else {
                clearInterval(fadeEffect);
            }
        }, 1500);
        window.addEventListener('load', fadeEffect);
    </script>
    <!--js for scroll to top-->
    <script src="up.js"></script>

    <!--JAVASCRIPT FOR TOGGLE MENU -->
    <script>
        var headerl = document.getElementById("headerl");

        function showMenu() {
            headerl.style.right = "0";
        }

        function hideMenu() {
            headerl.style.right = "-210px";
        }
    </script>


    <!--js for scroll effects-->
    <script src="scroll.js"></script>

</body>

</html>