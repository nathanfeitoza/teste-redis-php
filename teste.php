<?php
ini_set("session.save_handler", "redis");
ini_set("session.save_path", "tcp://redis_server?auth=123456");
if (!$_SESSION) {
    session_start();
}
var_dump($_SESSION);