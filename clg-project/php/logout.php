<?php
$cookie_name = "cookie";
$cookie_value = null;
    setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/");
    header("Location: /index.html");
    session_abort();
?>