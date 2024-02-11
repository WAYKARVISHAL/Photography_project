<?php
print_r($_POST);
$conn=mysqli_connect("localhost","root","","photography_project");
extract($_POST);
$sql=`CREATE TABLE feedback(feedback_id INT  PRIMARY KEY AUTO_INCREMENT,firstname VARCHAR(200),
lastname VARCHAR(299),phone VARCHAR(100),email VARCHAR(200),mess TEXT ) `;
$sql="INSERT INTO feedback(firstname,lastname,phone,email,mess) VALUES('$firstname',
'$lastname','$phone','$email','$message')";
mysqli_query($conn,$sql);
header('location:feedback.php');
// echo $sql;
?>