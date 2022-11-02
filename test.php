<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trustsec";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
}
$email = $_POST["email"];
$pass = $_POST["password"];
$sql = "SELECT * FROM `user-agent-trusts3c` WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
$query = "SELECT * FROM `user-agent-trusts3c`";
$result1 = mysqli_query($conn, $query);
$row = $result->fetch_assoc();
$uname = $row['uname'];
$hpass = $row['password'];
$authsub = $row['auth-lvl'];
$cookie_name = "cookie";
$n = 20;
$random = bin2hex(random_bytes($n));
$cookie_value = hash("sha256", $uname.$random);
$hash = hash('sha256', $pass);
if ($num == 1) {
                    if ($hash == $hpass) {
                              session_start();
                              $_SESSION['loggedin'] = true;
                              $_SESSION['email'] = $email;
                              $_SESSION['uname'] = $uname;
                              if ($authsub=="subscribed") {
                                        // $_SESSION['auth-lvl'] = '{isSUB:true}';
                                        echo '<script>document.cookie = "{isSUB:true}";</script>';
                              }
                              else{
                                        // $_SESSION['auth-lvl'] = '{isSUB:false}';
                                        echo '<script>document.cookie = "{isSUB:false}";</script>';
                              }
                              

                              
                              setcookie($cookie_name, $cookie_value , time() + (86400 * 30), "/");
                              $sql2 = "UPDATE `user-agent-trusts3c` SET `SESScookie`='$cookie_value' WHERE email='$email'";
                              $result2 = mysqli_query($conn,$sql2);
                              header("Location: /trustsec/userindex.php");
                    } else {
                              echo '<script>alert("Error: You have entered incorrect username or password."); location.href="/trustsec/login.html";</script>';
                    }
          }
else {
          echo '<script>alert("Opps: fill the data for login."); location.href="/trustsec/login.html";</script>';
}
?>