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
        $authsub = $row['auth-lvl'];
        // $_SESSION['auth-lvl'] = $authsub;
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
if ($authsub!="subscribed") {
    header("Location: /subscription.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Beth+Ellen&family=Cinzel+Decorative&family=IBM+Plex+Mono&family=Raleway&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
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
    <title>Tools | Trus7s3c_</title>
</head>

<body style="background-color: #290658;">
    <div class="center" style="display: none;">
        <div class="ring"></div>
        <span><img src="/img/Trus7_3c_-removebg-preview.png" alt="" height="120px" width="120px" id="logo-img">
            <br>Tool is scanning target</span>
    </div>




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
                        <a class="nav-link" href="/userindex.php">Home</a>
                    </li>
                    <li class="nav-item abc" id="progress">
                        <a class="nav-link" href="#">Tools</a>
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
        <h1 id="heading-1">Get set Hack!</h1>



        <div class="dropdown-center" id="drp-id">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                id="drp-button">
                Select Tool to Run
            </button>
            <ul class="dropdown-menu" id="drop-menu">
                <li onclick="tool_sel('nmap')"><a class="dropdown-item list-hover" href="#"
                        style="width: 210px; text-align:center;">Nmap</a>
                </li>
                <li onclick="tool_sel('af')"><a class="dropdown-item list-hover" href="#"
                        style="width: 210px; text-align:center;">Assetfinder</a></li>
                <li onclick="tool_sel('de')"><a class="dropdown-item list-hover" href="#"
                        style="width: 210px; text-align:center;">DNSenum</a>
                </li>
                <li onclick="tool_sel('whatweb')"><a class="dropdown-item list-hover" href="#"
                        style="width: 210px; text-align:center;">WhatWeb</a></li>
                <li onclick="tool_sel('ffuf')"><a class="dropdown-item list-hover" href="#"
                        style="width: 210px; text-align:center;">FFUF</a></li>
            </ul>
            <div id="form-center">
                <form action="http://4.224.52.184/tool.php" id="tag" style="text-align: center;" method="post">
                    <input type="hidden" id='toolname' name="tool_name">
                    <input type="text" placeholder="" name="ip1" id="ip1" value="">
                    <input type="text" placeholder="" name="ip2" id="ip2" value="">
                    <input type="text" placeholder="" name="ip3" id="ip3" value="">

                    <input type="submit" id="submit-button" value="Run Tool!"
                        style="text-align: center; display: none; position: relative; color: white; background-color: #7c28eb;  height: 30px; font-family: 'Cinzel Decorative', sans-serif; font-weight: 600; padding: 3px;">
                </form>
            </div>
        </div><br><br>
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
                            <h5 id="footer-h" onclick="expandAcademy()" style="font-family: 'Raleway';">Academy (soon)
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
        let width = screen.width;
        function expandTool() {
            if (width <= 1000) {
                document.getElementById("tool-list").style.display = "block";
                document.getElementById("academy-list").style.display = "none";
                document.getElementById("other-list").style.display = "none";
                document.getElementById("tool-list").addEventListener("click", closeList);
            }
        }
        function expandAcademy() {
            if (width <= 1000) {
                document.getElementById("tool-list").style.display = "none";
                document.getElementById("academy-list").style.display = "block";
                document.getElementById("other-list").style.display = "none";
                document.getElementById("academy-list").addEventListener("click", closeList);
            }
        }
        function expandOthers() {
            if (width <= 1000) {
                document.getElementById("tool-list").style.display = "none";
                document.getElementById("academy-list").style.display = "none";
                document.getElementById("other-list").style.display = "block";
                document.getElementById("other-list").addEventListener("click", closeList);
            }
        }
        function closeList() {
            if (width <= 1000) {
                document.getElementById("tool-list").style.display = "none";
                document.getElementById("academy-list").style.display = "none";
                document.getElementById("other-list").style.display = "none";
            }
        }
        function tool_sel(value) {
            var value1 = value;
            if (value1 == 'nmap') {
                document.getElementById('ip1').placeholder = "Enter IP Address";
                document.getElementById('ip2').placeholder = "Number of threads (1-5)";
                document.getElementById('ip3').placeholder = "Verbose Mode (yes/no)";
                document.getElementById('toolname').setAttribute('value', 'nmap');
                document.getElementById('ip1').style.display = 'block';
                document.getElementById('ip2').style.display = 'block';
                document.getElementById('ip3').style.display = 'block';
                document.getElementById('submit-button').style.display = 'block';
            }
            if (value1 == 'af') {
                document.getElementById('ip1').placeholder = "Enter Domain Name";
                document.getElementById('toolname').setAttribute('value', 'assetfinder');
                document.getElementById('ip1').style.display = 'block';
                document.getElementById('ip2').style.display = 'none';
                document.getElementById('ip3').style.display = 'none';
                document.getElementById('submit-button').style.display = 'block';
            }
            if (value1 == 'de') {
                document.getElementById('ip1').placeholder = "Enter Domain Name";
                document.getElementById('ip2').placeholder = "Number of threads (1-100)";
                document.getElementById('ip3').placeholder = "Recursive Mode (yes/no)";
                document.getElementById('toolname').setAttribute('value', 'dnsenum');
                document.getElementById('ip1').style.display = 'block';
                document.getElementById('ip2').style.display = 'block';
                document.getElementById('ip3').style.display = 'block';
                document.getElementById('submit-button').style.display = 'block';
            }
            if (value1 == 'whatweb') {
                document.getElementById('ip1').placeholder = "Enter URL for Tech Detection";
                // document.getElementById('ip2').placeholder = "Recursive Mode (yes/no)";
                document.getElementById('toolname').setAttribute('value', 'whatweb');
                document.getElementById('ip1').style.display = 'block';
                document.getElementById('ip2').style.display = 'none';
                document.getElementById('ip3').style.display = 'none';
                document.getElementById('submit-button').style.display = 'block';
            }
            if (value1 == 'ffuf') {
                document.getElementById('ip1').placeholder = "Enter URL to fuzz";
                // document.getElementById('ip2').placeholder = "Recursive Mode (yes/no)";
                document.getElementById('toolname').setAttribute('value', 'dirsearch');
                document.getElementById('ip1').style.display = 'block';
                document.getElementById('ip2').style.display = 'none';
                document.getElementById('ip3').style.display = 'none';
                document.getElementById('submit-button').style.display = 'block';
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