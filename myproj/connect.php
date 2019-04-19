<?php
global $connection;

if ( isset( $connection ) )
    return;

$connection = mysqli_connect("localhost:3306", "root", "", "test");

if (mysqli_connect_errno()) {        
    die(sprintf("Connect failed: %s\n", mysqli_connect_error()));
}
?>