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
    $ck = $_COOKIE['cookie'];
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
    if (mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()) {
            $a = $row['Fname'];
            $b = $row['Lname'];
            $c = $row['uName'];
            $d = $row['uID'];
            $e = $row['accessToken'];
            $f = $row['country'];
        }
    } 
    else{
        echo "0 results";
    }

    $result = mysqli_query($conn, $sql);

?>
    <style>
        #circular_image {
            background-image: linear-gradient(to right, purple, blue,rgb(0, 193, 252), rgb(0, 252, 42),yellow,orange,red);
            background-size: 95%;
            float: center;
            width: 200px;
            height: 200px;
            border-radius: 15%;
             border: 5px solid rgb(255, 0, 106); 
            overflow: hidden;
            border-width: 5px;
            border-color:rgb(122, 252, 0);
            z-index: 2;
            /* animation:blinking 0.5s infinite; */
        }
        #scontent{
            border-color: rgb(0, 255, 0);
            border-radius: 8px;
            border-width: 3px;
            color: rgb(0, 255, 0);
            background-color: rgb(0, 49, 0);
        }
        #dcontent{
            border-radius: 8px;
            border-width: 3px;
            background-color: rgb(93, 0, 0);
            color: red;
            border-color: red;
        }
        #scontent:hover{
            border-color: rgb(0, 255, 0);
            border-radius: 8px;
            border-width: 3px;
            color: rgb(0, 49, 0);
            background-color: rgb(0, 255, 0);
            /* animation:blinking 0.5s infinite; */
        }
        #dcontent:hover{
            border-radius: 8px;
            border-width: 3px;
            background-color: red;
            color: rgb(93, 0, 0);
            border-color: red;
        }
        .p1{
            font-size: 18px; 
            color:rgb(122, 252, 0);  
            font-weight: bold;
            margin-left: -700px;
        }
        input{
            border-top: 1px solid rgb(104, 87, 255);
            background-color: rgb(237, 209, 255);
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
            border-radius: 5px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            border: 1px solid rgb(255, 0, 106);
        }
        .lgin{
            margin-left: 40px;
        }
    </style>
</head>
<body
    style="background-image: linear-gradient(to right, rgb(0, 23, 85), rgb(0, 0, 0)); color: white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
    <center><div id="menu-bar">
        <ul>
            <a href="/index.html" style="text-decoration: none;" id="link"><li>Home</li></a>
            <a href="/courses.php" style="text-decoration: none;" id="link"><li>Courses</li></a>
            <a href="/writeups.html" style="text-decoration: none;" id="link"><li>Writeups</li></a>
            <a href="/tools.html" style="text-decoration: none;" id="link"><li>Tools</li></a>
            <a href="/progress.html" style="text-decoration: none;" id="link"><li>Progress</li></a>
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
        User Profile</h2>
        <br>
        <pre style="border-top: 1px solid rgb(104, 87, 255);"></pre><br><br><br>
    <center>
<!-----------------------------------------------------pic---------------------------------------------------------------->
    <div class="column">
            <img src="/images/bbos.png" alt="" id="circular_image" style="margin-left: -428px; border-radius: 50%; height: 200px; width: 200px;">
    <div style="margin-left: 955px;margin-bottom: 0px;padding-bottom: 0px;margin-top: -201px;">
    <p id="p1" class="p1">
        <?php 
            echo "Name : ".$a." ".$b;    
        ?>
    </p>
    <p id="p2" class="p1">
        <?php 
            echo "User : ".$c."#".$d;    
        ?>
    </p>
    <p id="p3" class="p1">
        <?php 
            echo "Access Token : ".$e;    
        ?>
    </p>
    <p id="p4" class="p1">
        <?php 
            echo "Country : ".$f;    
        ?>
    </p>
    </div>
    </div></center>
    <br><br><br>
    <center>
        <p style="font-size: 50px; color: rgb(255, 0, 106);">Update Profile</p>
    </center>
<!--------------------------------------------------------------------table------------------------------------------------------------------->
    <table align="center" border="0" cellspacing="0"  width="50%" >
        <form action="/php/prof-update.php" autocomplete="on" method="POST" id="form1">
<!-- ----------------------------------------------------------------1st row----------------------------------------------------------------->
            <tr>
                <td style="width: 533.483px;">
                    <p class="lgin">FIRST NAME :</p>
                </td>
                <td style="width: 533.483px;">
                    <p class="lgin">LAST NAME :</p>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="fname" maxlength="30" size="50px" id="Fname" placeholder="First Name" style="height: 25px; text-align: center; margin-left: 40px; width:325.017px;">
                </td>
                <td>
                    <input type="text" name="lname" maxlength="30" size="50px" id="Lname" placeholder="Last Name" style="height: 25px; text-align: center; margin-left: 40px; width:325.017px;">
                </td>
            </tr>
            <tr>
                <td>
                    <p id="errfirst"></p>
                </td>
                <td>
                    <p id="errlast"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
<!-- ----------------------------------------------------------------2nd row----------------------------------------------------------------->
            <tr>
                <td>
                    <p class="lgin">USER NAME :</p>
                
                </td>
                <td>
                    <p class="lgin">COUNTRY :</p>
                
                </td>
                
            </tr>
            <tr>
                <td >
                    <input type="text" name="uname" maxlength="30" size="50px" id="Uname" placeholder="User Name" style="height: 25px; text-align: center; margin-left: 40px; width:325.017px;">
                </td>
                <td >
                    <input type="text" name="country" maxlength="30" size="50px" id="country" placeholder="Country" style="height: 25px; text-align: center; margin-left: 40px; width:325.017px;">
                </td>
                
            </tr>
            <tr>
                <td>
                    <p id="erruname"></p>
                </td>
                <td>
                    <p id="errcoun"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
<!------------------------------------------------------------------3rd row----------------------------------------------------------------->
            <tr>
                <td>
                    <p class="lgin" >DATE OF BIRTH :</p>
                </td>
                <td>
                    <p class="lgin">UNIVERSITY NAME :</p>
                </td>
            </tr>
            <tr>
                <td >
                    <input type="date" name="DOB" maxlength="30" size="50px" id="Fname" style="height: 25px; text-align: center; width: 325px;margin-left: 40px;">
                </td>
                <td >
                    <input type="text" name="university" maxlength="30" size="50px" id="Lname" placeholder="University Name" style="height: 25px; text-align: center; margin-left: 40px; width:325.017px;">
                </td>    
            </tr>
            <tr>
                
                <td>
                    <p id="errdate"></p>
                </td>
                <td>
                    <p id="erruni"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>
<!------------------------------------------------------------------4rd row----------------------------------------------------------------->
            <tr>
                <td>
                    <p class="lgin" >PHONE NO :</p>
                </td>
                <td>
                    <p class="lgin">EMAIL :</p>
                
                
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="phnnum" maxlength="30" size="50px" id="Fname" placeholder="Phone No" style="height: 25px; text-align: center; margin-left: 40px; width:325.017px;">
                </td>
                <td>
                    <input type="text" name="mail" maxlength="50" size="50px" id="Lname" placeholder="Email" style="height: 25px; text-align: center; margin-left: 40px; width:325.017px;">
                </td>
            </tr>
            <tr>
                
                <td>
                    <p id="errphone">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        *Do not Include country code</p>
                </td>
                
                <td>
                    <p id="erremail"></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p></p>
                </td>
            </tr>         
<!------------------------------------------------------------------5rd row----------------------------------------------------------------->
<!------------------------------------------------------------------6d row----------------------------------------------------------------->
            <tr>
                <td colspan="2">
                    <p class="lgin" style="color: red; padding-left: 90px;">
                        *If You Want To Update Your Profile Then You Have To Input All Field.
                    </p>
                </td>
            </tr>
        </form>
        <form action="/php/del.php" id='frm2' method='post'>
            <input type="hidden" name='del' value='Delete Account'>
        </form>
<!------------------------------------------------------------------Purnahuti----------------------------------------------------------------->
    </table>
    <center>
        <button type="submit" onclick="tout()" form="form1" value="Save Changes" id="scontent" style="font-size: 15px; padding: 15px;">Save Changes</button>&nbsp;&nbsp;
        <button type="submit" onclick="del()" form="form2" value="Delete Account" name='del' id="dcontent" style="font-size: 15px; padding: 15px;">Delete Account</button></center>
        <p><center>
            <a href="/opassword.php" class="lgin" style="margin: -77; text-decoration: none; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; color: yellow;">Change Your Password</a>
        </center></p>
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
<br>
<script>
    function del(){
        location.href = '/php/del.php';
    }
    function tout(){
    setTimeout(alrt(),100000);
    }
    function alrt(){
    alert("Submit changes?");
    var frm = document.getElementById('a42') || null;
        if(frm) {
            frm.action = '/php/prof-update.php';
        }
    }
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