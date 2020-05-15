<?php

function get_Skills($name, $Skills)
{
        /* Database INFO */
	$servername = "cs.newpaltz.edu";
	$username = "adidamv1";
	$password = "xv1td6";
	$dbname = "adidamv1_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT Skills FROM Enterprise WHERE Technology = '$name'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $p = $row["Skills"];
      }
    } else {
                     $p = null;
        }

    $conn->close();

if ($p == $Skills) 
  {
    return "true";
  }
else 
 {
  return "false";

 }

}

?>

