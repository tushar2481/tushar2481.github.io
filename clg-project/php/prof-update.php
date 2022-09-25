<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $country = $_POST['country'];
    $DOB = $_POST['DOB'];
    $university = $_POST['university'];
    $phnnum = $_POST['phnnum'];
    $mail = $_POST['mail'];
    if(($fname=="" && $lname=="" && $uname=="" && $mail=="" && $phnnum=="" && $university=="" && $country=="" && $DOB=="")){
        echo '<script>alert("Fill Complete Form"); location.href = "/profile.php";</script>';  
    }
    else{
        $basereg = '/^[a-z ]/i';
        $unamereg = '/^[a-z0-9]/i';
        $mailreg = '/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/i';
        $phnreg = '/^[0-9]{10}$/i';
        $dobreg = '/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/';
        $op1 = preg_match($basereg,$fname);
        $op2 = preg_match($basereg,$lname);
        $op3 = preg_match($unamereg,$uname);
        $op6 = preg_match($mailreg,$mail);
        $op7 = preg_match($phnreg,$phnnum);
        $op8 = preg_match($basereg,$university);
        $op9 = preg_match($basereg,$country);
        $op10 = preg_match($dobreg,$DOB);
        $ck = $_COOKIE['cookie'];

        if($op1=="1"&&$op2=="1"&&$op3=="1"&&$op6=="1"&&$op7=="1"&&$op8=="1"&&$op9=="1"&&$op10=="1"){
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
                $sql = "UPDATE `user-agent-bb` SET `uName`='$uname',`Fname`='$fname',`Lname`='$lname',`country`='$country',`DOB`='$DOB',`university`='$university',`phnNo`='$phnnum',`emailID`='$mail' WHERE SESScookie='$ck'";
                mysqli_query($conn, $sql);
                mysqli_close($conn);
                echo '<script>alert("Account Updated Successfully"); location.href = "/login.html";</script>';
        }
        else{
            echo '<script>alert("Incorrect Info. Entered"); location.href="/profile.php";</script>';
        }
    }
?>