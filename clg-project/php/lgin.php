<?php
    $uname = test_input($_POST['Uname']);
    $pass = test_input($_POST['Pass']);
    $error = "Invalid Username or Password";
    $x = true;
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bbos_db";

    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT `uName`, `passwd`,`SESScookie` FROM `user-agent-bb` WHERE uName='$uname' AND passwd='$pass'";
    $result = mysqli_query($conn, $sql);
    $cookie_name = "cookie";
    if (mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()) {
            $cookie_value = md5($uname+rand(100,999));
            header("Location: /profile.php");
            session_start();
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            $sql2 = "UPDATE `user-agent-bb` SET `SESScookie`='$cookie_value' WHERE uName='$uname'";
            $result2 = mysqli_query($conn,$sql2);
        }
    }
    else{
        echo "<script type='text/javascript'>alert('Invalid Username/Password'); location.href = '/login.html';</script>";
    }
    mysqli_close($conn);
?>