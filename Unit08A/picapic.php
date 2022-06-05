<?php
    // Ian Lorimer Assignment U0A
    // Get pitcure sent by GET
    // isset() tests for data at the gateway, required on many servers
    // Use of PHP
    // use a webform
    // use of PHP conditional statements
    // Created client server event using PHP and webpage
    echo '<body style="background-color:skyblue">';
    // Show errors, but not all...
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Get pic from a GET
    if(isset($_GET['pic']))
    {
        $pic = $_GET['pic'];
        echo "<center><img src='$pic' ></center>";
    }
    else
    {
        $pic = "";
    }
?>