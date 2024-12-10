<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "younes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";





//code for information


if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST["name"];
$email = $_POST["email"];
$phonenumber = $_POST["phonenumber"];


$sql = "INSERT INTO user(name, email, phonenumber)
VALUE ('$name','$email','$phonenumber')";

                  if($conn ->query($sql) === TRUE) {
                      echo "your data is sending";

                  }else{
                      echo "your data is error ";
                  }

}

?>




