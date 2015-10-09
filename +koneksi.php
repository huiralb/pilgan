<?php

ini_set("display_errors", 1);

$db = new mysqli('localhost', 'user', '', 'test');

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}