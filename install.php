<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "emphub";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	echo "connected with database !!!";
}
// Create database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{ echo "connected with db";
}

// login table
$sql = "create table login(lid INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
userName varchar(50) NOT NULL UNIQUE,password varchar(50) NOT NULL,userType varchar(50) NOT NULL)";
if ($conn->query($sql) === TRUE) {
    echo " login table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql="create table employee(empNo int(10) not null AUTO_INCREMENT,empFirstName varchar(50) not null,empLastName varchar(50) not null,
dob Date , doj Date not null,
dept varchar(100) , grade varchar(10) ,gender varchar(10) ,martialstatus varchar(10) ,home varchar(100) , phNo varchar (12) UNIQUE, primary key(empNo));
";
if ($conn->query($sql) === TRUE) {
    echo " customer table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql="insert into login(userName,password,userType) values("admin","admin","admin");
if ($conn->query($sql) === TRUE) {
    echo " admin created successfully";
} else {
    echo "Error creating admin: " . $conn->error;
}

$conn->close();
?>
