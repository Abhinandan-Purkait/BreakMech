<?php
$host="localhost";
$username="root";
$user_pass="1Abhinandan!";
$database_in_use="test";

$maker = new mysqli($host, $username, $user_pass, $database_in_use);

    $newName=$_GET["name"];
    $newEmail=$_GET["email"];

    echo"<h2>$newName $newEmail</h2>";

    $sql="INSERT INTO info (name,email) VALUES (NULL,'$newName','$newEmail')";

    if ($maker->query($sql) === TRUE) 
    {
        echo "New record created successfully";
        $maker->close();
        return;
    }
?>