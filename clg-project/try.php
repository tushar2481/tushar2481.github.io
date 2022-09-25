<?php
    class User{
        public $name;
        public $validity;
    }
    $user1 = new User;
    $user1->name = 'Tushar';
    $user1->validity = 'echo "<script>alert(1);</script>"';
    $serstr = serialize($user1);
    $unserstr = unserialize($serstr);
    var_dump($unserstr);
    var_dump($unserstr['validity']);
?>