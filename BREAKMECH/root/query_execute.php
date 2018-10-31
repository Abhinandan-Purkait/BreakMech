
<html>
<body>
<br><br>
</body>
</html>
<?php
$myHostName = "localhost";
$username = "root";
$password = "1Abhinandan!";
$database_in_use = "test";

$maker = new mysqli($myHostName, $username, $password, $database_in_use);

// if ($maker->connect_error) {
//     die("Connection failed: " . $maker->connect_error);
// } 

$sql = $_GET["querytracker"];
$sp = substr($sql,0,6);

//INSERTION
if(strcmp($sp, 'INSERT') == 0)
{    
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
}

//SELECTION
if(strcmp($sp, 'SELECT') == 0)
{
    $feedback = $maker->query($sql);

    if ($feedback->num_rows > 0) 
    {
        echo "ID | " . " |------Name------| " ." |Age| " . " |----Job----|". " |-------Salary--------| " . "<br>";
        while($row = $feedback->fetch_assoc())
        {
            echo "  |  ". $row["id_no"]. "  |  " . $row["name"]. "  |   " . $row["age"]. "  |  " . $row["job"]. "  |  " . $row["salary"] . "<br>";
        }
        $maker->close();
        return;
    }
    else if($result==0)
    {
        echo "0 results";
        $maker->close();
        return;
    }
}

//UPDATION
if(strcmp($sp, 'UPDATE') == 0)
{    
    if ($maker->query($sql) === TRUE) 
    {
        echo "Updated successfully";
        $maker->close();
        return;
    }
    else if($maker->query($sql) === FALSE)
    {
        echo "Error: " . $sql . "<br>" . $maker->error;
        $maker->close();
        return;
    }
}

?>