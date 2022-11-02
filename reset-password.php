<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trustsec";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
}
session_start();
$email = $_SESSION['email'];
$pass = $_POST['password'];
$sql = "SELECT * FROM `user-agent-trusts3c` WHERE email='$email' ";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
$query = "SELECT * FROM `user-agent-trusts3c`";
$result2 = mysqli_query($conn, $query);
$row = $result->fetch_assoc();
$uname = $row['uname'];
$hpass = $row['password'];
$pass1 = $_POST['npass'];
$pass2 = $_POST['cnpass'];
$passreg = '/^[a-z0-9@#$!]/i';
$op1 = preg_match($passreg, $pass);
$op2 = preg_match($passreg, $pass1);
$op3 = preg_match($passreg, $pass2);
$hash = hash('sha256', $pass);
$ck = $_COOKIE['cookie'];
$row = mysqli_fetch_assoc($result);
if ($op1 == "1" && $op2 == "1" && $op3 == "1") {
          if ($num == 1) {
                              if ($hash == $hpass && $pass1===$pass2) {
                                        $hash1 = hash('sha256', $pass2);
                                        $query1 = "UPDATE `user-agent-trusts3c` SET `password` = '$hash1' WHERE email='$email'";
                                        mysqli_query($conn, $query1);

                                        echo '<script>alert("Success! Your password has been successfully changed"); location.href="/php/logout.php";</script>';
                                        echo '<script>/login.html</script>';
                              } 
                              elseif ($pass1 != $pass2) {
                                        echo '<script>alert("Error: Please, enter the same new password."); location.href="/reset-password.html";</script>';
                              }
                              else{
                                        echo '<script>alert("Error: Old Password does Not match."); location.href="/reset-password.html";</script>';
                              }
                    }
          }
// } 
else {
          echo '<script>alert("Opps: fill the data for login."); location.href="/reset-password.html";</script>';
}
?>