<?php

$db_user = "root";
$db_pass = '';
$db_name = "user_jobs";

$db = new PDO('mysql:host=localhost;dbname='. $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);