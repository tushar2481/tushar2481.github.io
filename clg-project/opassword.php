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
    <script src="/sCrIpTs/courses.js"></script>
    <?php
      if($_COOKIE['cookie'] == ""){
        header("Location: /index.html");
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
        Password Reset</h2>
        <br>
        <pre style="border-top: 1px solid rgb(104, 87, 255);"></pre><br><br><br>
        <center>
        <form action="/php/updatepass.php" method="POST" onsubmit="return validate()">
            <div id="frm">
            <label for="pass" class="lgin">Old Password&nbsp;&nbsp; </label>
            <input type="password" name="op" id="Pass" placeholder="enter password" class="lgin-ip" minlength="8" style="margin-left: 38px;">
            <p id="p1"></p><br>
            <label for="pass" class="lgin">New Password&nbsp;&nbsp; </label>
            <input type="password" name="pass1" id="Pass" placeholder="enter password" class="lgin-ip" minlength="8" style="margin-left: 30px;">
            <p id="p2"></p><br>
            <label for="pass" class="lgin">Confirm Password&nbsp;&nbsp; </label>
            <input type="password" name="pass2" id="Pass" placeholder="enter password" class="lgin-ip" minlength="8">
            <p id="p3"></p><br>
            <input type="hidden" name="uname" value="">
            <input type="submit" class="lgin-sub" value="Change Password">
            <input type="reset" class="lgin-rst">
            <br><br>
            <a href="/profile.php" id="link" style="text-decoration: none; font-family: cursive;">//Back to profile page.//</a>
        </div>
        </form>
        </center>
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
<pre style="font-size: 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">                                              <i style="font-size:15px;">©</i> 2021 All rights reserved - Black Blood Offensive Security                     <a href="/courses.php" style="text-decoration: none;">Courses</a>     <a href="/login.html" style="text-decoration: none;">Login</a>     <a href="/tools.html" style="text-decoration: none;">Tools</a>     <a href="/writeups.html" style="text-decoration: none;">Write-Ups</a></pre>
<br><script>
    let x = document.cookie;
    if(x.slice(45,100)!=""){
        document.getElementById('lgin3').innerHTML = 'Logout';
        document.getElementById('lgin4').href = '/php/logout.php';
        document.getElementById('lgin').innerHTML = 'Profile';
        document.getElementById('lgin2').href = '/profile.php';
    }
</script>
</body>
</html>