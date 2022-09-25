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
    <style>
      #ncontent{
            border-color: rgb(255, 255, 255);
            border-radius: 8px;
            border-width: 3px;
            color: rgb(0, 0, 0);
            background-color: rgb(255, 255, 255);
            
        }
        #pcontent{
            border-radius: 8px;
            border-width: 3px;
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            border-color: rgb(255, 255, 255);
        }
        #ncontent:hover{
            border-color: rgb(160, 160, 160);
            border-radius: 8px;
            border-width: 3px;
            color: rgb(0, 0, 0);
            background-color: rgb(149, 149, 149);
        }
        #pcontent:hover{
            border-radius: 8px;
            border-width: 3px;
            background-color: rgb(160, 160, 160);
            color: rgb(0, 0, 0);
            border-color: rgb(149, 149, 149);
        }
    </style>
</head>
<body
    style="background-image: linear-gradient(to right, rgb(0, 23, 85), rgb(0, 0, 0)); color: white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
    <center><div id="menu-bar">
        <ul>
            <li><a href="/index.html" style="text-decoration: none;" id="link">Home</a></li>
            <li><a href="/courses.php" style="text-decoration: none;" id="link">Courses</a></li>
            <li><a href="/writeups.html" style="text-decoration: none;" id="link">Writeups</a>
            </li>
            <li><a href="/tools.html" style="text-decoration: none;" id="link">Tools</a>
            </li>
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
        Course</h2>
        <br>
        <pre style="border-top: 1px solid rgb(104, 87, 255);"></pre><br><center><form action="snort.php">
          <h1 style="font-size: 45px;">
          Kali linux Installation 2020.4
          </h1>
          <iframe width="60%" height="500" src="https://www.youtube.com/embed/QECSUgjE8eY?autoplay=1">
          </iframe> <br><br>
          <input type="submit" value="Previous" id="pcontent" src="/snort.php" style="font-size: 20px; padding: 10px 15px; margin-left:670px; background-color: rgb(0, 2, 116); color: white;">
          <input type="submit" value="Next" id="ncontent" src="/snort.php" style="font-size: 20px; padding: 10px 25px; margin-left: 30px; background-color: rgb(0, 2, 116); color: white;" >
        </form></center>
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
<br><pre style="font-size: 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">                                              © 2021 All rights reserved - Black Blood Offensive Security                     <a href="/courses.php" style="text-decoration: none;">Courses</a>     <a href="/login.html" style="text-decoration: none;">Login</a>     <a href="/tools.html" style="text-decoration: none;">Tools</a>     <a href="/writeups.html" style="text-decoration: none;">Write-Ups</a></pre><br>
<script>
  let x = document.cookie;
  if(x.slice(45,100)!=""){
      document.getElementById('lgin3').innerHTML = 'Logout';
      document.getElementById('lgin4').href = '/php/logout.php';
      document.getElementById('lgin').innerHTML = 'Profile';
      document.getElementById('lgin2').href = '/profile.php';
  }
  if(x.slice(45,100)==""){
        location.href = "/";
  }
</script>
</body>
</html>