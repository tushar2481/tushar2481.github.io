<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bbos_db";
        $ck = $_COOKIE['cookie'];
        echo "<script>alert('Are You Sure to Delete Account?\nDeleted Account can't be recovered!');</script>";
        $conn = mysqli_connect($servername, $username, $password,$dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "DELETE FROM `user-agent-bb` WHERE SESScookie='$ck'";
        echo '<script>alert("Account Deleted Successfully!");</script>';
        $result = mysqli_query($conn, $sql);
        echo '<script>location.href="/index.html"</script>';
        header("Location: /php/logout.php");
        mysqli_close($conn);
?>
