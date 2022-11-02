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
        $a = $row['fname'];
        $b = $row['email'];
        $c = $row['auth-lvl'];
        $d = $row['phone'];
        $e = $row['address'];
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
    <title>Profile | Trus7s3c_</title>

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
                        <a class="nav-link" href="/userindex.php">Home</a>
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
    </nav><br><br><br><br><br><br>
    <div class="container">
        <div class="main-body">




            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4 name="fname"><?php echo $uname1; ?></h4>
                                    <p class="text-secondary mb-1" id="user-role"><?php echo $c; ?></p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?php echo $a; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?php echo $b; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?php echo $d; ?>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                <?php echo $e; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " href="/editprofile.php">Edit</a>
                                    <a class="btn btn-info " href="/reset-password.html">Reset-password</a>
                                    <a class="btn btn-danger " href="/php/logout.php">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i
                                            class="material-icons text-info mr-2">Tools</i>&nbsp; Status</h6>
                                    <pre>Tools Used     <p>72/100</p></pre>
                                    <div class="progress mb-3" style="height: 5px">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <pre>Nmap           </pre><br>
                                    <pre>Assetfinder            </pre><br>
                                    <pre>DNSenum            </pre><br>
                                    <pre>Whatweb            </pre><br>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
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
                                <li id="other-list-2"><a href="/subscription.html">Subscription</a></li>
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