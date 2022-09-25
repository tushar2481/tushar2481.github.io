<?php
    $mail = $_POST['mail'];
    $op = $_POST['op'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $mailreg = '/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/i';
    $passreg = '/^[a-z0-9@#$!]/i';   
    $op1 = preg_match($mailreg,$mail);
    $op2 = preg_match($passreg,$op);
    $op3 = preg_match($passreg,$pass1);
    $op4 = preg_match($passreg,$pass2);
    if($op1=="1" && $op2=="1" && $op3=="1" && $op4=="1" && $mail!=""){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bbos_db";

        $conn = mysqli_connect($servername, $username, $password,$dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM `user-agent-bb` WHERE emailID='$mail'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $sql2 = "UPDATE `user-agent-bb` SET `passwd`='$pass1' WHERE emailID='$mail' ";
            mysqli_query($conn, $sql2);
            echo '<script>alert("Password Updated Successfully!"); location.href="/login.html"</script>';
        }
        mysqli_close($conn);
    }
    if($op1=="0"&&$op2=="1"&&$op3=="1"&&$op4=="1"){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bbos_db";
        $ck = $_COOKIE['cookie'];
        $conn = mysqli_connect($servername, $username, $password,$dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM `user-agent-bb` WHERE passwd='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            $sql2 = "UPDATE `user-agent-bb` SET `passwd`='$pass1' WHERE SESScookie='$ck'";
            mysqli_query($conn, $sql2);
            echo '<script>alert("Password Updated Successfully!");location.href="/login.html"</script>';
        }
        mysqli_close($conn);
    }
?>