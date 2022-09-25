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
        $course = $_POST['course'];
        if($course=='course1'){
            echo '<script>alert("Price : $40 -> WAPT");</script>';
        }
        if($course=='course2'){
            echo '<script>alert("Price : $25 -> NWPT");</script>';
        }
        if($course=='course3'){
            echo '<script>alert("Price : $75 -> SPEN");</script>';
        }
        if($course=='course4'){
            echo '<script>alert("Price : $50 -> CRBS");</script>';
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
        style="text-align: center; font-size: 30px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: rgb(0, 174, 255);">
        Payment Portal</h2>
        
        <br>
        <center>
        <h2>Credit / Debit Card</h2></center>
        <table>
    <center>
    <form action="/php/buy1.php" method="POST" onsubmit="return cardValidate()">
        <div id="frm">
            <label for="fname" class="lgin">Name On Card&nbsp; </label>
            <input type="text" name="cname" placeholder="Enter First Name" class="lgin-ip">
            <br><br>
            <label for="mname" class="lgin">Card Number</label>
        <input type="text" name="cnum" id="crdnum" placeholder="Card Number" class="lgin-ip" style="margin-left: 20px;">
        <p id="crdnump"></p><br>
        <label for="mname" class="lgin">MM/YY - CVV </label>
        <input type="text" name="mmyy" id="mmyy" placeholder="MM/YY" class="lgin-ip" style="width: 45px;margin-left: 13px;" maxlength="5" minlength="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="password" name="cvv" id="cvv" placeholder="CVV" class="lgin-ip"minlength="3" maxlength="3" style="width: 45px;">
        <p id="myc"></p>
        <br>
        <label for="mail" class="lgin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mail Id&nbsp; </label>
        <input type="email" name="mail" id="mail" placeholder="enter Mail-Id" class="lgin-ip" style="margin-left: 0px;">
        <p id="mail"></p>
        <input type="hidden" value="<?php   echo $course;   ?>"  name="course">
        <br>
        <input type="submit" class="lgin-sub" value="Pay Now">
        <input type="reset" class="lgin-rst" value="Reset">
        <br>
    </div>
    </form>
    <table>
    </center>
<br><br>
<!-- UPI Payment-->
<center>
    <h2>UPI Payment (GPAY / AMAZON PAY / PAYTM)</h2></center>
    <table>
<center>
<form action="/php/buy2.php" method="POST" onsubmit="return validateUPI()">
    <div id="frm">
        <label for="uid" class="lgin">UPI Id&nbsp; </label>
        <input type="text" name="uid" id="upinum" placeholder="UPI ID" class="lgin-ip" style="margin-left: 71px;">
        <p id="upip"></p><br>
        <label for="number" class="lgin">Mobile Number</label>
    <input type="tel" name="phnnum" id="phnnum" placeholder="Mobile Number" class="lgin-ip" style="margin-left: 2px;" minlength="10" maxlength="10"><p id="phnp"></p>
    <br>
    <label for="mail" class="lgin">Mail Id&nbsp; </label>
    <input type="email" name="mail" id="mailid" placeholder="enter Mail-Id" class="lgin-ip" style="margin-left: 68px;">
    <p id="mailp"></p>
    <br>
    <label for="upipass" class="lgin">UPI PIN&nbsp; </label>
    <input type="number" name="upipass" id="upipin" placeholder="UPI PIN" class="lgin-ip" style="margin-left: 58px;">
    <p id="pinp"></p>
    <br>
    <label for="cupipass" class="lgin">Confirm PIN&nbsp; </label>
    <input type="number" name="cupipass" id="confpin" placeholder="Confirm UPI PIN" class="lgin-ip" style="margin-left: 16px;">
    <p id="confp"></p>
    <input type="hidden" value='<?php   echo $course;   ?>'  name="course">
    <br>
    <input type="submit" class="lgin-sub" value="Pay Now">
    <input type="reset" class="lgin-rst" value="Reset">
    <br>
</div>
</form>
<table>
</center>
<!-- UPI End-->
<br><br>
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
</script>
</body>
</html>