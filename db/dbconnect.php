<?php

$db = new mysqli ($HOST, $USER, $PASSWORD, $DATABASE);

//if ($mysqli->connect_errno) {
//
//    $mysqli = new mysqli(BACKUP_HOST, BACKUP_USER, BACKUP_PASSWORD, BACKUP_DATABASE);
//}

if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}