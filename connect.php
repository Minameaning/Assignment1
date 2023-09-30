<?php
ini_set("display_errors", "On");
$servername="localhost";
$username="root";
$passwords="";
$database="tutor_finder";

//create a connection
$conn=mysqli_connect($servername,$username,$passwords,$database);

//Die if connection not successful
if(!$conn){
    die("it isn't connected");
}
else{
    echo "Connection was successful";
}

$sql=" CREATE TABLE IF NOT EXISTS tutors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    email VARCHAR(100),
    password VARCHAR(255) NOT NULL,
    subjects VARCHAR(255),
    experience INT,
    rate DECIMAL(5,2),
    availability TEXT
)";
mysqli_query($conn,$sql);
?>
