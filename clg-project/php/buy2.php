<?php
    $uid = $_POST['uid'];
    $phnnum = $_POST['phnnum'];
    $mail = $_POST['mail'];
    $upipass = $_POST['upipass'];
    $cupipass = $_POST['cupipass'];
    $course = $_POST['course'];

    $basereg = '/^[a-z0-9@-]/i';
    $phnnumreg = '/^[0-9]{10}$/i';
    $upipassreg = '/^[0-9]{4,6}$/i';
    $mailreg = '/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/i';

    $op1 = preg_match($basereg,$uid);
    $op2 = preg_match($phnnumreg,$phnnum);
    $op3 = preg_match($mailreg,$mail);
    $op4 = preg_match($upipassreg,$upipass);
    $op5 = preg_match($upipassreg,$cupipass);

    if($op1=="0"&&$op2=="0"&&$op3=="0"&&$op4=="0"&&$op5=="0"&&$upipass==$cupipass){
        echo '<script>alert("Invalid Data Provided"); location.href="/buy.php";</script>';
    }
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bbos_db";
        $ck = $_COOKIE['cookie'];
        if($ck==""){
            echo '<script>location.href="http://localhost:8888/login.html";alert("You Must have to Login Before Purchasing Course");</script>';
        }
        if($course=="course1"){
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            if (!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            $sql = "UPDATE `user-agent-bb` SET `course1`='true',`phnNo`='$phnnum',`PIN`='$upipass' WHERE SESScookie='$ck'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>alert('Thank You for Purchasing Our Course');location.href='/courses.php';</script>";
        }
        if($course=="course2"){
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            if (!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            $sql = "UPDATE `user-agent-bb` SET `course1`='true',`phnNo`='$phnnum',`PIN`='$upipass' WHERE SESScookie='$ck'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>alert('Thank You for Purchasing Our Course');location.href='/courses.php';</script>";
        }
        if($course=="course3"){
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            if (!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            $sql = "UPDATE `user-agent-bb` SET `course1`='true',`phnNo`='$phnnum',`PIN`='$upipass' WHERE SESScookie='$ck'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>alert('Thank You for Purchasing Our Course');location.href='/courses.php';</script>";
        }
        if($course=="course4"){
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            if (!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            $sql = "UPDATE `user-agent-bb` SET `course1`='true',`phnNo`='$phnnum',`PIN`='$upipass' WHERE SESScookie='$ck'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>alert('Thank You for Purchasing Our Course');location.href='/courses.php';</script>";
        }

?>