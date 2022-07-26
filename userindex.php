<?php
session_start();
$ck = $_COOKIE['cookie'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trustsec";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `user-agent-trusts3c` WHERE SESScookie='$ck'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = $result->fetch_assoc()) {
        $uname1 = $row['uname'];
        $at = $row['accessToken'];
    }
}
else{
    echo "0 results";
}
$result = mysqli_query($conn, $sql);
if (!isset($_SESSION['uname'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.html');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tool-home | Trus7s3c_</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Beth+Ellen&family=Cinzel+Decorative&family=IBM+Plex+Mono&family=Raleway&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/tool.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css"
        integrity="sha512-+oRH6u1nDGSm3hH8poU85YFIVTdSnS2f+texdPGrURaJh8hzmhMiZrQth6l56P4ZQmxeZzd2DqVEMqQoJ8J89A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css"
        integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/solid.min.css"
        integrity="sha512-uj2QCZdpo8PSbRGL/g5mXek6HM/APd7k/B5Hx/rkVFPNOxAQMXD+t+bG4Zv8OAdUpydZTU3UHmyjjiHv2Ww0PA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style="background-image: linear-gradient(to bottom, #1a003e,#1a003e,#ffffff );">

    <nav class="navbar navbar-expand-lg navigation" id="navbar-id">
        <div class="container-fluid" id="logo">
            <a class="navbar-brand" href="#" id="logo-name">
                <img src="/img/Trus7$3c_.png" alt="" height="60px" width="60px" id="logo-img">
                Trus7s3c_</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="height: 20px; width:20px; color: #ffffff;"></span>
            </button>
            <div class="collapse navbar-collapse col1" id="navbarNav">
                <ul class="navbar-nav def" id="list">
                    <li class="nav-item abc" id="course">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item abc" id="progress">
                        <a class="nav-link" href="/tools.php">Tools</a>
                    </li>
                    <li class="nav-item abc" id="cert">
                        <a class="nav-link" href="/subscription.php">Subscription</a>
                    </li>
                    <li class="nav-item abc">
                        <a class="nav-link" href="/pentest.php">Services</a>
                    </li>
                    <?php echo '<li class="nav-item abc" id="user">
                        <a class="nav-link" style="position:relative;" id="user-a" href="/profile.php">
                            <pre style="font-size: 15px;"> <img src="/img/Trusts3c logo.svg" alt="" id="user-img" width="50px" height="50px"
                                    style="text-align :center;"> ' . $uname1 . ' </pre>
                        </a>
                    </li>'; ?>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        <div id="div-heading">
            <h1 id="heading1">Our tools at a glance</h1>
        </div>

        <div id="div1">

            <img src="/img/Why (1366 × 750 px) (1366 × 730 px).png" alt="#" width="100%" height="100%" id="image">
            <ul id="btn-list">


                <li><button id="subscribe-btn" onclick="window.location.href = '/subscription.php';">Subscribe</button></li>
                <li><button id="take-me-to-tool-btn" onclick="window.location.href = '/tools.php';">Take me to tools</button></li>
            </ul>
        </div>

        <div id="div2">
            <h3 id="tool-heading">Which tools do we offer?</h3>

            <div id="marquee">
                <marquee behavior="scroll" direction="left" scrollamount="5">
                    <img src="/img/34567.png" alt="img" id="img-1">

                    <img src="/img/nmap.png" alt="img" id="img-2">

                    <img src="/img/image.png" alt="img" id="img-3">

                    <img src="/img/assetfinder.png" alt="img" id="img-4">

                    <img src="/img/sqlmap_logo.png" alt="img" id="img-5">

                    <img src="/img/subfinder.png" alt="img" id="img-6">

                    <img src="/img/unnamed (2).png" alt="img" id="img-7">

                    <img src="/img/unnamed.png" alt="img" id="img-8">

                </marquee>
            </div>
        </div>

        <div id="div3">
            <h3 id="tool-heading"><br><br>Why to use this tools?<br></h3>

            <div id="cards">
                <div id="card-1">
                    <div id="inner">
                        <div id="front" class="card-1-front">
                            <img src="/img/no-need-to-setup.jpg" alt="" id="card-1-img">
                            <h4 id="tool-heading-cards-1"> Pre installed tools, no need for setup
                            </h4>
                        </div>
                        <div id="back">
                            <h4 id="tool-heading-cards">Pre installed tools, no need for setup</h4>
                            <!-- <p>  card back </p> -->
                        </div>
                    </div>
                </div>
                <div id="card-2">
                    <div id="inner">
                        <div id="front">
                            <img src="/img/phy-rs-noneed.jpg" alt="" id="card-2-img">
                            <h4 id="tool-heading-cards-2">No physical resource of your system used</h4>
                        </div>
                        <div id="back">
                            <h4 id="tool-heading-cards">No physical resourceof your system used</h4>
                            <!-- <p>  card back </p> -->
                        </div>
                    </div>
                </div>
                <div id="card-3">
                    <div id="inner">
                        <div id="front">
                            <img src="/img/access-from-anywhere.jpg" alt="" id="card-3-img">
                            <h4 id="tool-heading-cards-3">Access from anywhere</h4>
                        </div>
                        <div id="back">
                            <h4 id="tool-heading-cards">Access from anywhere</h4>
                            <!-- <p>  card back </p> -->
                        </div>
                    </div>
                </div>
                <div id="card-4">
                    <div id="inner">
                        <div id="front">
                            <img src="/img/speedtest.png" alt="" id="card-4-img">
                            <h4 id="tool-heading-cards-4">High speed upto 10GBPS</h4>
                        </div>
                        <div id="back">
                            <h4 id="tool-heading-cards">High speed upto 10GBPS</h4>
                            <!-- <p>  card back </p> -->
                        </div>
                    </div>
                </div>
                <div id="card-5">
                    <div id="inner">
                        <div id="front">
                            <img src="/img/all-devices.jpg" alt="" id="card-5-img">
                            <h4 id="tool-heading-cards-5">Available on all devices</h4>
                        </div>
                        <div id="back">
                            <h4 id="tool-heading-cards">Available on all devices</h4>
                            <!-- <p>  card back </p> -->
                        </div>
                    </div>
                </div>
                <div id="card-6">
                    <div id="inner">
                        <div id="front">
                            <img src="/img/low-net.jpg " alt="" id="card-6-img">
                            <h4 id="tool-heading-cards-6">No need of high bandwidth needed from your side</h4>
                        </div>
                        <div id="back">
                            <h4 id="tool-heading-cards">No need of high bandwidth needed from your side</h4>
                            <!-- <p>  card back </p> -->
                        </div>
                    </div>
                </div>
                <div id="card-7">
                    <div id="inner">
                        <div id="front">
                            <img src="/img/time-saver.jpg" alt="" id="card-7-img">
                            <h4 id="tool-heading-cards-7">Relaible and time saver</h4>
                        </div>
                        <div id="back">
                            <h4 id="tool-heading-cards">Relaible and time saver</h4>
                            <!-- <p>  card back </p> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div id="div4">

            <h3 id="tool-video-heading">How to use tools?</h3>
            <div id="video">
                <p id="video-para">In This Tutorial, Our Pentester Mr.Cry0nix aka Tushar Motka described how to use our
                    tools effectively. How to Save Output and many more techniques.<br><br> Author - Tushar Motka
                    <br> <a href="https://twitter.com/TusharMotka1">@TusharMotka1</a>
                </p>


                <iframe width="420" height="315" src="https://www.youtube.com/embed/QECSUgjE8eY?autoplay=1"
                    style="border-radius: 30px;" id="video-link">
                </iframe>
            </div>
        </div>
    </div>


    <!-- footer -->
    <div class="footer">
        <div id="footer-div">
            <div id="footer-div-1">
                <div id="footer-logo">
                    <a class="navbar-brand" href="#">
                        <img src="/img/Trus7$3c_ footer1.png" alt="" height="60px" width="60px" id="logo-img">
                        Trus7s3c_</a>
                </div>
                <div id="newsletter">
                    <p id="newsletter-para">Subscribe to our newsletter</p>
                    <span class="search">
                        <form action="#" method="post">
                            <label for="input-text"></label>
                            <input type="text" id="input-text" name="input-text">
                            <button id="sub-btn"><i class="fa-solid fa-arrow-right"></i></button>
                        </form>
                    </span>

                </div>
            </div>
            <div id="footer-div-2">
                <div id="footer-category">
                    <div id="footer-category-1">
                        <div id="tools">
                            <h5 id="footer-h" onclick="expandTool()" ondblclick="closeList()"
                                style="font-family: 'Raleway';">Tools</h5>
                            <ul id="tool-list">
                                <li style="list-style: none;">
                                    <hr>
                                </li>
                                <li id="tool-list-1"><a href="#">New realeased tools</a></li>
                                <li id="tool-list-2"><a href="#">Most frequently used tools</a></li>
                                <li id="tool-list-3"><a href="#">What kind of tools do we provide?</a></li>
                                <li id="tool-list-4"><a href="#">security auditing</a></li>
                                <li id="tool-list-5"><a href="#">Terms of usage</a></li>
                            </ul>
                        </div>
                        <div id="academy">
                            <h5 id="footer-h" onclick="expandAcademy()" style="font-family: 'Raleway';">Academy
                                (soon)
                            </h5>
                            <ul id="academy-list">
                                <li style="list-style: none;">
                                    <hr>
                                </li>
                                <li id="academy-list-1"><a href="#">New realeased courses</a></li>
                                <li id="academy-list-2"><a href="#">All course</a></li>
                                <li id="academy-list-3"><a href="#">Certifications</a></li>
                                <li id="academy-list-4"><a href="#">Instructors</a></li>
                                <li id="academy-list-5"><a href="#">Free material</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="footer-category-2">
                        <div id="other">
                            <h5 id="footer-h" onclick="expandOthers()" style="font-family: 'Raleway';">Other</h5>
                            <ul id="other-list">
                                <li style="list-style: none;">
                                    <hr>
                                </li>
                                <li id="other-list-1"><a href="#">Blogs</a></li>
                                <li id="other-list-2"><a href="/subscription.php">Subscription</a></li>
                                <li id="other-list-3"><a href="/pentest.php">Personal pentesting services</a></li>
                                <li id="other-list-4"><a href="/pentest.php">Business</a></li>
                                <li id="other-list-5"><a href="/aboutus.php">About us</a></li>
                                <li id="other-list-6"><a href="#">Career</a></li>
                            </ul>
                        </div>
                        <div id="social">
                            <h5 id="footer-h" style="font-family: 'Raleway';">Social</h5>
                            <ul id="social-list">
                                <li style="list-style:none;">
                                    <hr id="hr">
                                </li>

                                <!-- Facebook -->
                                <li><a style="color: #3b5998;" href="#!" role="button"><i
                                            class="fab fa-facebook-f fa-lg"></i></a>&nbsp; &nbsp;

                                    <!-- Twitter -->
                                    <a style="color: #55acee;" href="#!" role="button"><i
                                            class="fab fa-twitter fa-lg"></i></a>&nbsp;&nbsp;

                                    <!-- Google -->
                                    <a style="color: #dd4b39;" href="#!" role="button"><i
                                            class="fab fa-google fa-lg"></i></a>&nbsp;&nbsp;

                                    <!-- Instagram -->
                                    <a style="color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram fa-lg"
                                            height="15" width="12"></i></a>&nbsp;&nbsp;
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="copyright">
            <hr style="width: 90%; margin-left : 5%;">
            <div id="policies-list">
                <ul id="list-footer-policies">
                    <li id="policies-list1"><a href="#">Policies</a></li>
                    <li id="policies-list2"><a href="#">Terms</a></li>
                    <li id="policies-list3"><a href="#">Privacy</a></li>
                    <li id="policies-list4"><a href="#">Security</a></li>
                </ul>
                <p id="p-footer-polices">@Trus7s3c_Inc.</p>
            </div>
        </div>
    </div>
    <script>
        function expandTool() {
            document.getElementById("tool-list").style.display = "block";
            document.getElementById("academy-list").style.display = "none";
            document.getElementById("other-list").style.display = "none";
            document.getElementById("tool-list").addEventListener("click", closeList);
        }
        function expandAcademy() {
            document.getElementById("tool-list").style.display = "none";
            document.getElementById("academy-list").style.display = "block";
            document.getElementById("other-list").style.display = "none";
            document.getElementById("academy-list").addEventListener("click", closeList);
        }
        function expandOthers() {
            document.getElementById("tool-list").style.display = "none";
            document.getElementById("academy-list").style.display = "none";
            document.getElementById("other-list").style.display = "block";
            document.getElementById("other-list").addEventListener("click", closeList);
        }
        function closeList() {
            document.getElementById("tool-list").style.display = "none";
            document.getElementById("academy-list").style.display = "none";
            document.getElementById("other-list").style.display = "none";
        }


        window.onresize = function () {
            if (window.innerWidth < 700) {
                image.setAttribute("src", "/img/tool1-tablet.png");
            } else {
                image.setAttribute("src", "/img/Why (1366 × 750 px) (1366 × 730 px).png");
            }
        }
    </script>
    <!-- bootstrap links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
    <script>
        let x = document.cookie;
        if(x.slice(45,100)!=""){
            document.getElementById('lgin3').innerHTML = 'Logout';
            document.getElementById('lgin4').href = '/php/logout.php';
            document.getElementById('lgin').innerHTML = 'Profile';
            document.getElementById('lgin2').href = '/profile.php';
        }
        if(x.slice(45,100)==""){
                location.href = "/login.html";
        }
        
        </script>
</body>

</html>