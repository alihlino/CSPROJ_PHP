<?php
function con($user='root', $pass='', $database='feelfins', $host='localhost')
{
    $mysqli = new mysqli($host, $user, $pass, $database);
    if(mysqli_connect_errno())
    {
        printf("Failed to connect to database: %s", mysqli_connect_error());
        die();
    }

    return $mysqli;
}


$dbc = con();
?>