<?php
    $host="localhost";
    $username="root";
    $user_pass="1Abhinandan!";
    $database_in_use="mechanics_data";

    $maker = new mysqli($host, $username, $user_pass, $database_in_use);

    $newName=$_GET["name"];
    $newAddres=$_GET["address"];
    $newLocality=$_GET["locality"];
    $newEmail=$_GET["email"];
    $newContactNo=$_GET["number"];
    
    echo"<h2>$newAddres $newName $newContactNo $newEmail $newLocality</h2>";

    $sql="INSERT INTO mechanics_info (id_mech,name_mech,address_mech,locality_mech,book_mech,lat_mech,long_mech,e_mail_mech,contact_mech)
    VALUES (NULL,'$newName','$newAddres','$newLocality','1','22.22','22.22','$newEmail','$newContactNo')";

    if ($maker->query($sql) === TRUE) 
    {
        echo "New record created successfully";
        $maker->close();
        return;
    }
    else if($maker->query($sql) === FALSE)
    {
        echo "Error: " . $sql . "<br>" . $maker->error;
        $maker->close();
        return;
    }
?>
