<?php 
require("connect.php");  
$EmployeeId=$_POST["EmployeeId"];

$tql = "select * from employee where empNo=$EmployeeId";
$result = $conn->query($tql);
 if ($result->num_rows > 0) { 
 	while($row = $result->fetch_array(MYSQLI_ASSOC) ) {
 		echo json_encode($row);
    }
   } else {
   	    $err=array("err"=>"unable to load item");
   	     echo json_encode($err);
    }
$conn->close(); 
?>
