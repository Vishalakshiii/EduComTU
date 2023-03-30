<?php

$servername = "localhost";
$database = "educomtu";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully<br>";

$sql="SELECT * FROM `personal_info`";
$result= mysqli_query($conn,$sql);

//find th number of records returned

$num = mysqli_num_rows($result);
echo $num;
echo "<br>";

// display rows returned by sql query

if($num>0){

    while( $row = mysqli_fetch_assoc($result)){

    // echo var_dump($row);
    echo " I am " . $row['name']. " roll number " . $row['name'];
    echo "<br>";
}
}
/*
//collect post variables
$username=$_POST['username'];
$password=$_POST['password'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$mobile_number=$_POST['mobile_number'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$address=$_POST['address'];
 
$sql="INSERT INTO `user_data`.`user_details` (username, password, first_name, last_name, mobile_number, email,dob, address) VALUES ('$username','$password','$first_name','$last_name','$mobile_number','$email','$dob','$address');"; 


if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

*/
?>
