<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Home - Black Blood Offensive Security</title>
    <link rel="stylesheet" href="/index.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="Icon" type="image/png" href="/images/bbos.png">
    <?php
    error_reporting(0);
    $course1 = false;
    $course2 = false;
    $course3 = false;
    $course4 = false;
    try{
        $ck = $_COOKIE["cookie"];
    }catch(Exception $ex){
        echo '';
        $ck = '';
    }
    if($ck!=""){
        $logedin = true;
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bbos_db";

        $conn = mysqli_connect($servername, $username, $password,$dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM `user-agent-bb` WHERE SESScookie='$ck'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            while($row = $result->fetch_assoc()) {
                $course1 = $row['course1'];
                $course2 = $row['course2'];
                $course3 = $row['course3'];
                $course4 = $row['course4'];
            }    
        }
    }
?>
</head>
<body
    style="background-image: linear-gradient(to right, rgb(0, 23, 85), rgb(0, 0, 0)); color: white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
    <center><div id="menu-bar">
        <ul>
            <a href="/index.html" style="text-decoration: none;" id="link"><li>Home</li></a>
            <a href="/courses.php" style="text-decoration: none;" id="link"><li>Courses</li></a>
            <a href="/writeups.html" style="text-decoration: none;" id="link"><li>Writeups</li></a>
            <a href="/tools.html" style="text-decoration: none;" id="link"><li>Tools</li></a>
            <a href="/login.html" id="lgin2" style="text-decoration: none;" id="link">
            <li id="lgin">Login/signup</li></a>
            <a href="#" id="lgin4" style="text-decoration: none;" id="link">
            <li id="lgin3"></li></a>
        </ul>
    </div>
</center>
<br>
<br>
<br>
    <h1
        style="text-align: center; font-size: 50px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
        Bl4ck Blood Offensive Security</h1>
    <h2
        style="text-align: center; font-size: 30px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: rgb(251, 255, 0);">
        Courses</h2>
        <br>
        <pre style="border-top: 1px solid rgb(104, 87, 255);"></pre><br><br><br>
    <!-- Containers -->
    <center>
    <div id="container1">
        <table border="0" style="color: white; border-collapse: collapse;">
        <tr>
            <td class="cont">
                <video width="100%" height="60%" class="vid" style="margin-top: -22px; margin-bottom: -40px;" autoplay muted loop>
                    <source src="/images/webappcourse.mp4" type="video/mp4">
                </video>
                <!-- <img src="/images/tryit.png" alt="img" style="height: 180px; width: auto;"> -->
                <br><br><br><pre>---------->> WAPT <<----------
                <br>Web App Pentesting :
We have cover major web app  
attacks & their defence     
    +       
   Hands-On Labs for practice     

                </pre>
                <center>
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><b>Price : 40$</b></p>
                <a href="/wapt.html" id="b12">
                <input type="submit" value="View more" class="lgin-sub" id="v1"></a>&nbsp;&nbsp;<br><br>
                <form action="/buy.php"  method="POST" id="a12">
                    <input type="hidden" value="course1" name="course">
                    <input type="submit" value="Buy Now" class="lgin-sub" id="b1" style="margin-left: -10px;"><br><br></form>
                </center>
            </td>
            <td><pre>               </pre></td>
            <td class="cont">
              <video width="100%" height="60%" class="vid"  style="margin-top: -18px; margin-bottom: -40px;" autoplay muted loop>
                  <source src="/images/netseccourse.mp4" type="video/mp4" >
              </video><br><br><br><pre>---------->> NWPT <<----------
              <br>Network Pentesting :
  We have cover major Network  
attacks & their defence     
    +       
    Hands-On Labs for practice     
              
              </pre>
              <center>
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><b>Price : 25$</b></p>
                <a href="/nwpt.html" id="b22">
                <input type="submit" value="View more" class="lgin-sub" id="v2"></a>&nbsp;&nbsp;<br><br>
                <form action="/buy.php"  method="POST" id="a22">
                    <input type="hidden" value="course2" name="course">
                    <input type="submit" value="Buy Now" class="lgin-sub" id="b2" style="margin-left: -10px;"><br><br></form>
                </center>
            </td>
            
        </tr>
        <tr>
            <td class="cont"><br><br><br><br><br>
                <video width="100%" height="60%" class="vid" style="margin-top: -22px; margin-bottom: -40px;" autoplay muted loop>
                    <source src="/images/syscourse.mp4" type="video/mp4" >
                </video><br><br><br><pre>---------->> SPEN <<----------
                <br>System Pentesting :
We have cover major System  
attacks & their defence     
    +       
   Hands-On Labs for practice     

                </pre>
                <center>
                    <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><b>Price : 75$</b></p>
                    <a href="/spen.html" id="b32"><input type="submit" value="View more" class="lgin-sub" id="v3"></a>&nbsp;&nbsp;<br><br>
                    <form action="/buy.php"  method="POST" id="a32">
                    <input type="hidden" value="course3" name="course">
                    <input type="submit" value="Buy Now" class="lgin-sub" id="b3" style="margin-left: -10px;"><br><br></form>
                </center>
            </td>
            <td><pre>               </pre></td>
            <td class="cont"><br><br><br><br><br>
              <video width="100%" height="60%" class="vid"  style="margin-top: -18px; margin-bottom: -40px;" autoplay muted loop>
                  <source src="/images/crptcourse.mp4" type="video/mp4">
              </video><br><br><br><pre>---------->> CRBS <<----------
              <br>Cryptography & Bash :
  We have cover major Cryptography  
 & Bash Scripting     
    +       
    Hands-On Labs for practice     
              
              </pre>
              <center>
                <p style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><b>Price : 50$</b></p>
                <a href="/crbs.html" id="b42">
                <input type="submit" value="View more" class="lgin-sub" id="v4"></a>&nbsp;&nbsp;<br><br>
                <form action="/buy.php"  method="POST" id="a42">
                    <input type="hidden" value="course4" name="course">
                    <input type="submit" value="Buy Now" class="lgin-sub" id="b4" style="margin-left: -10px;"><br><br></form>
                </center>
            </td>
            
        </tr>
    </table>
    </div></center>
    <!-- COntainers Ends-->
    <br><br><br>
    <center>
    <div id="contact">
            <h2>Join Us</h2>
            <span class="instagram">
                <a href="https://instagram.com/cyber._.learn" id="insta" target="_blank"><span
                        class="fa fa-instagram"></span></a>
            </span>
            <span>&nbsp;&nbsp;</span>
            <span class="linkedin">
                <a href="https://www.linkedin.com/in/jay-patel-301a371b1" id="linkedin" target="_blank"><span
                        class="fa fa-linkedin"></span></a>
            </span>
            <span>&nbsp;&nbsp;</span>
            <span class="youtube">
                <a href="https://youtube.com/channel/UCWhZ0R9kTJJ-3zozBWstsaw" id="youtube" target="_blank">
                <span class="fa fa-youtube"></span></a>
            </span>
            <span>&nbsp;&nbsp;</span>
            <span class="twitter">
                <a href="https://twitter.com/tusharmotka1" id="twitter" target="_blank">
                <span class="fa fa-twitter"></span></a>
            </span>
            <span>&nbsp;&nbsp;</span>
            <span class="github">
                <a href="https://github.com/tushar2481/" id="github" target="_blank">
                <span class="fa fa-github-alt"></span></a>
            </span>
        </div>
</center>
<br>
<pre style="font-size: 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">                                              <i style="font-size:15px;">©</i>2021 All rights reserved - Black Blood Offensive Security                     <a href="/courses.php" style="text-decoration: none;">Courses</a>     <a href="/login.html" style="text-decoration: none;">Login</a>     <a href="/tools.html" style="text-decoration: none;">Tools</a>     <a href="/writeups.html" style="text-decoration: none;">Write-Ups</a></pre>
<br>
<script>
    let x = document.cookie;
    if(x.slice(45,100)!=""){
        document.getElementById('lgin3').innerHTML = 'Logout';
        document.getElementById('lgin4').href = '/php/logout.php';
        document.getElementById('lgin').innerHTML = 'Profile';
        document.getElementById('lgin2').href = '/profile.php';
    }
    if((<?php echo $course1 ?>)==true){
        document.getElementById('v1').value = 'Continue Course';
        document.getElementById('b1').value = 'Complete Course';
        document.getElementById('b12').href = '/kali.php';
        var frm = document.getElementById('a12') || null;
        if(frm) {
            frm.action = '/complete.html';
        }
    }
    if((<?php echo $course2 ?>)==true){
        document.getElementById('v2').value = 'Continue Course';
        document.getElementById('b2').value = 'Complete Course';
        document.getElementById('b22').href = '/kali.php';
        var frm = document.getElementById('a22') || null;
        if(frm) {
            frm.action = '/complete.html';
        }
    }
    if((<?php echo $course3 ?>)==true){
        document.getElementById('v3').value = 'Continue Course';
        document.getElementById('b3').value = 'Complete Course';
        document.getElementById('b32').href = '/kali.php';
        var frm = document.getElementById('a32') || null;
        if(frm) {
            frm.action = '/complete.html';
        }
    }
    if((<?php echo $course4 ?>)==true){
        document.getElementById('v4').value = 'Continue Course';
        document.getElementById('b4').value = 'Complete Course';
        document.getElementById('b42').href = '/kali.php';
        var frm = document.getElementById('a42') || null;
        if(frm) {
            frm.action = '/complete.html';
        }
        
    }
</script>
</body>
</html>