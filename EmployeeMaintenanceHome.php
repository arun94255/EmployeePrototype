<?php
require("connect.php");
$userName=$_POST["userName"];
$password=$_POST["password"];
$tql = "select * from  login where userName = \"$userName\" and password=\"$password\"";
$result = $conn->query($tql);
/*if($result==TRUE) {
    echo " $dbname is selected successfully";
} else {
    echo "Error to select data: ".$conn->error;
}*/
if ($result->num_rows > 0) {
  while($row = $result->fetch_array(MYSQLI_ASSOC) ) {
        echo "ok";
         }
     }
     else{
   	 echo"Please Enter correct userName and password";
    }

$conn->close();
?>
