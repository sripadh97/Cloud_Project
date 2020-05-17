<?php

function get_skills($name)
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

       $sql = "SELECT skills FROM Companies WHERE technology='$name'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $skills = $row["skills"];
      }
    } else {
                     $skills = null;
        }

    $conn->close();

    return $skills;
}

?>

