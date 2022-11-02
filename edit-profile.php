<?php
    session_start();
    $ck = $_COOKIE['cookie'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['phn'];
    $address = $_POST['address'];
    if(($fname=="" && $email=="" && $phone=="" && $address=="")){
        echo '<script>alert("Fill Complete Form"); location.href = "/editprofile.php";</script>';  
    }
    else{
        $basereg = '/^[a-z ]/i';
        $unamereg = '/^[a-z0-9]/i';
        $mailreg = '/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/i';
        $phnreg = '/^[0-9]{10}$/i';
        $op1 = preg_match($basereg,$fname);
        $op2 = preg_match($mailreg,$email);
        $op3 = preg_match($phnreg,$phone);
        $op4 = preg_match($basereg,$address);
        $ck = $_COOKIE['cookie'];

        if($op1=="1"&&$op2=="1"&&$op3=="1"&&$op4=="1"){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "trustsec";

            $conn = mysqli_connect($servername, $username, $password,$dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $que1 = "SELECT `email` FROM `user-agent-trusts3c` WHERE email='$email'";
            $result1 = mysqli_query($conn, $que1);
                $sql = "UPDATE `user-agent-trusts3c` SET `fname` = '$fname', `email` = '$email', `phone` = '$phone', `address` = '$address' WHERE SESScookie='$ck';";
                mysqli_query($conn, $sql);
                mysqli_close($conn);
                echo '<script>alert("Account Updated Successfully"); location.href = "/profile.php";</script>';
        }
        else{
            echo '<script>alert("Incorrect Info. Entered"); location.href="/editprofile.php";</script>';
        }
    }
?>