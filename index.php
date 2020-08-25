<?php
ini_set("session.save_handler", "redis");
ini_set("session.save_path", "tcp://redis_server?auth=123456");

if (!$_SESSION) {
    session_start();
}

$_SESSION['teste'] = 'testar o teste';

var_dump($_SESSION);
