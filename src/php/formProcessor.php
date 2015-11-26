<?php

include_once '';

$a = $_POST[''];

$sql = "INSERT INTO table (columns)
VALUES ('$a')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();