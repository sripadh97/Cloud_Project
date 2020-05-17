<?php

function get_Skills($name)
{
        /* Database INFO */
	$servername = "ec2-3-235-24-81.compute-1.amazonaws.com";
	$username = "deploy";
	$password = "m8DIHSXdFX";
	$dbname = "cloud_project";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT Skills FROM Company WHERE Technology='$name'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $Skills = $row["Skills"];
      }
    } else {
                     $Skills = null;
        }

    $conn->close();

    return $Skills;
}

?>

