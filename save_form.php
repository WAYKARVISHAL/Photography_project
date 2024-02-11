<?php
print_r($_POST);
$conn=mysqli_connect("localhost","root","","photography_project");
extract($_POST);
// $sql=`CREATE TABLE user(user_id INT  PRIMARY KEY AUTO_INCREMENT,fullname VARCHAR(200),
// email VARCHAR(299),mess VARCHAR(100)) `;
$sql="INSERT INTO user(fullname,email,mess) VALUES('$fullname',
'$email','$message')";
mysqli_query($conn,$sql);
header('location:contact.php');
// echo $sql;
?>