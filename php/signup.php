<?php
// require 'php/partphp/_connect.php';
$fname = $_POST['fname'];
$uname = $_POST['uname'];
$pass = $_POST["password"];
$cpass = $_POST["cpassword"];
$email = $_POST['email'];
$n = 20;
$random = bin2hex(random_bytes($n));
$sessID = hash("sha256", $uname.$random);
$uType = 'basic';
$aT = rand(100,999)."-".rand(100,999)."-".rand(100,999);
if(($fname=="" && $uname=="" && $pass=="" && $cpass=="" && $email=="" )){
echo '<script>alert("Fill Complete Form"); location.href = "/login.html";</script>';  
}
else{
$basereg = '/^[a-z ]/i';
$unamereg = '/^[a-z0-9]/i';
$passreg = '/^[a-z0-9@#$!]/i';
$emailreg = '/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/i';
$op1 = preg_match($basereg,$fname);
$op2 = preg_match($unamereg,$uname);
$op3 = preg_match($passreg,$pass);
$op4 = preg_match($emailreg,$email);
$uid = rand(100000,999999);
$uType = 'basic';

if($op1=="1"&&$op2=="1"&&$op3=="1"&&$op4=="1"){
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "trustsec";
          // CREATE TABLE `test`.`user-agent-trusts3c` (`sno` INT(50) NOT NULL AUTO_INCREMENT , `fname` VARCHAR(50) NOT NULL , `uname` VARCHAR(30) NOT NULL , `password` VARCHAR(255) NOT NULL , `email` VARCHAR(100) NOT NULL , `dt` DATETIME NOT NULL , `auth-lvl` VARCHAR(10) NOT NULL , `accessToken` INT(100) NOT NULL , `SESScookie` VARCHAR(500) NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB;
          // ALTER TABLE `user-agent-trusts3c` ADD UNIQUE(`email`);
          // ALTER TABLE `user-agent-trusts3c` ADD UNIQUE(`accessToken`);
          // ALTER TABLE `user-agent-trusts3c` ADD UNIQUE(`SESScookie`);

          $conn = mysqli_connect($servername, $username, $password,$dbname);
          if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
          }

          $que1 = "SELECT `email` FROM `user-agent-trusts3c` WHERE email='$email'";
          $result1 = mysqli_query($conn, $que1);
          $que2 = "SELECT `email` FROM `user-agent-trusts3c` WHERE uname='$uname'";
          $result2 = mysqli_query($conn, $que2);
          if (mysqli_num_rows($result1) > 0){
          echo "<script>alert('User Already Exist with this email ID'); location.href='/login.html';</script>";
          mysqli_close($conn);
          }
          elseif (mysqli_num_rows($result2) > 0){
          echo "<script>alert('User Already Exist with this username'); location.href='/login.html';</script>";
          mysqli_close($conn);
          }
          else{
          if(($pass == $cpass)){
                    // $hash = password_hash($pass, PASSWORD_DEFAULT);
                    $hash = hash('sha256', $pass);
                    $sql = "INSERT INTO `user-agent-trusts3c` (`fname`, `uname`, `password`, `email`, `dt`, `auth-lvl`, `accessToken`, `SESScookie`) VALUES ('$fname', '$uname', '$hash', '$email', current_timestamp(), '$uType', '$aT', '$sessID');";                    
                    mysqli_query($conn, $sql);
                    mysqli_close($conn);
                    echo '<script>alert("Account Created Successfully"); location.href = "/login.html";</script>';
          }
          else{
                    echo '<script>alert("Password do not match"); location.href = "/login.html";</script>';
          }
          }
}
else{
          echo '<script>alert("Incorrect Info. Entered"); location.href="/login.html";</script>';
}
}
?>