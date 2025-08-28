<?php

//$name = $_POST['ban-email'];
$email = $_POST['ban-email'];
$phone_number = $_POST['ban-phone'];

$sql = "INSERT INTO leads (email, phone_number) VALUES ('$email', '$phone_number')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>