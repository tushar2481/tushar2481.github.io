<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $mail = $_POST['mail'];
    $phnnum = $_POST['phnnum'];
    $university = $_POST['university'];
    $country = $_POST['country'];
    $DOB = $_POST['DOB'];
    $sessID = md5($uname+rand(100,999));
    if(($fname=="" && $lname=="" && $uname=="" && $pass=="" && $pass2=="" && $mail=="" && $phnnum=="" && $university=="" && $country=="" && $DOB=="")){
        echo '<script>alert("Fill Complete Form"); location.href = "/signup.html";</script>';  
    }
    else{
        $basereg = '/^[a-z ]/i';
        $unamereg = '/^[a-z0-9]/i';
        $passreg = '/^[a-z0-9@#$!]/i';
        $mailreg = '/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/i';
        $phnreg = '/^[0-9]{10}$/i';
        $dobreg = '/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/';
        $op1 = preg_match($basereg,$fname);
        $op2 = preg_match($basereg,$lname);
        $op3 = preg_match($unamereg,$uname);
        $op4 = preg_match($passreg,$pass);
        $op5 = ($pass === $pass2);
        $op6 = preg_match($mailreg,$mail);
        $op7 = preg_match($phnreg,$phnnum);
        $op8 = preg_match($basereg,$university);
        $op9 = preg_match($basereg,$country);
        $op10 = preg_match($dobreg,$DOB);
        $uid = rand(100000,999999);
        $aT = rand(100,999)."-".rand(100,999)."-".rand(100,999);
        $uType = 'basic';

        if($op1=="1"&&$op2=="1"&&$op3=="1"&&$op4=="1"&&$op5=="1"&&$op6=="1"&&$op7=="1"&&$op8=="1"&&$op9=="1"&&$op10=="1"){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bbos_db";

            $conn = mysqli_connect($servername, $username, $password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $que1 = "SELECT `emailID` FROM `user-agent-bb` WHERE emailID='$mail'";
            $result1 = mysqli_query($conn, $que1);
            if (mysqli_num_rows($result1) > 0){
                echo "<script>alert('User Already Exist with this mail ID : '+'$mail'); location.href='/signup.html';</script>";
                mysqli_close($conn);
            }
            else{

                $sql = "INSERT INTO `user-agent-bb`(`uID`, `uName`, `passwd`, `auth-lvl`, `course1`, `course2`, `course3`, `course4`, `accessToken`, `SESScookie`, `Fname`, `Lname`, `phnNo`, `emailID`, `country`, `credCRD`, `upiID`, `mm/yy`, `cvv`, `nameOnCard`, `PIN`, `DOB`, `prog1`, `prog2`, `prog3`, `prog4`, `university`) VALUES ('$uid','$uname','$pass2','$uType','false','false','false','false','$aT','$sessID','$fname','$lname','$phnnum','$mail','$country','','','','','','','$DOB','0','0','0','0','$university')";
                mysqli_query($conn, $sql);
                mysqli_close($conn);
                echo '<script>alert("Account Created Successfully"); location.href = "/login.html";</script>';
            }
        }
        else{
            echo '<script>alert("Incorrect Info. Entered"); location.href="/signup.html";</script>';
        }
    }
?>