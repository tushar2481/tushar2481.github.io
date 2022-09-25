<?php
    $cname = $_POST['cname'];
    $cnum = $_POST['cnum'];
    $mmyy = $_POST['mmyy'];
    $cvv = $_POST['cvv'];
    $mail = $_POST['mail'];
    $course = $_POST['course'];

    $basereg =  '/^[a-z ]$/i';//a-z & whitespace case-sens:no
    $cnumreg =  '/^[0-9 ]{14}$/';//14 len number with space
    $mmyyreg =  '/^[00-12]{1}[\/][20-30]{1}$/';//mm(00-12)/yy(20-30)
    $cvvreg =    '/^[000-999]{1}$/';//cvv 3 num
    $mailreg = '/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/i';

    $op1 = preg_match($basereg,$cname);
    $op2 = preg_match($cnumreg,$cnum);
    $op3 = preg_match($mmyyreg,$mmyy);
    $op4 = preg_match($cvvreg,$cvv);
    $op5 = preg_match($mailreg,$mail);

    if($op1=="0"&&$op2=="0"&&$op3=="0"&&$op4=="0"&&$op5=="0"){
        echo '<script>alert("Invalid Data Provided"); location.href="/buy.php";</script>';
    }
    else{
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
            $sql = "UPDATE `user-agent-bb` SET `course1`='true',`credCRD`='$cnum',`mm/yy`='$mmyy',`cvv`='$cvv',`emailID`='$mail' WHERE SESScookie='$ck'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>alert('Thank You for Purchasing Our Course');location.href='/courses.php';</script>";
        }
        if($course=="course2"){
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            if (!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            $sql = "UPDATE `user-agent-bb` SET `course2`='true',`credCRD`='$cnum',`mm/yy`='$mmyy',`cvv`='$cvv',`emailID`='$mail' WHERE SESScookie='$ck'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>alert('Thank You for Purchasing Our Course');location.href='/courses.php';</script>";
        }
        if($course=="course3"){
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            if (!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            $sql = "UPDATE `user-agent-bb` SET `course3`='true',`credCRD`='$cnum',`mm/yy`='$mmyy',`cvv`='$cvv',`emailID`='$mail' WHERE SESScookie='$ck'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>alert('Thank You for Purchasing Our Course');location.href='/courses.php';</script>";
        }
        if($course=="course4"){
            $conn = mysqli_connect($servername, $username, $password,$dbname);
            if (!$conn) {
                die("Connection failed: ".mysqli_connect_error());
            }
            $sql = "UPDATE `user-agent-bb` SET `course4`='true',`credCRD`='$cnum',`mm/yy`='$mmyy',`cvv`='$cvv',`emailID`='$mail' WHERE SESScookie='$ck'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>alert('Thank You for Purchasing Our Course');location.href='/courses.php';</script>";
        }
    }
?>