<?php
// Get form data
$page_screen = $_POST['page_screen'];
$status = "New Enquiry";
$ip_address = "";
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}

$ip_address = $_SERVER['REMOTE_ADDR']; // Replace this with your method to get the IP address
$geolocation = file_get_contents('http://ip-api.com/json/'.$ip_address);
$location_info = json_decode($geolocation);

$country = $location_info->country;
$region = $location_info->regionName;
$city = $location_info->city;


// Database configuration
$servername = "localhost";
$username = "u935057905_urban";
$password = "KFC$23@k";
$database = "u935057905_urban";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


    // Prepare and bind
if($page_screen == "home_banner")
{
    $email = $_POST['ban-email'];
    $phone_number = $_POST['ban-phone'];
    
    $stmt = $conn->prepare("INSERT INTO leads (email, phone_number, page_screen, status, location) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $email, $phone_number, $page_screen, $status, $ip_address);
}

if($page_screen == "home_quick_enquiry")
{

$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone'];
$course = $_POST['course'];
$page_screen = $_POST['page_screen'];

$stmt = $conn->prepare("INSERT INTO leads (first_name, email, phone_number, course_interest, page_screen) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $phone_number, $course, $page_screen);

}

// Execute the statement
if ($stmt->execute()) {

  $to = 'admin@urbancode.in';
  $subject = 'New Enquiry Received';
  $message = "Email: $email\nPhone Number: $phone_number";
  $headers = 'From: vimal@urbancode.in' . "\r\n" .
      'Reply-To: vimal@urbancode.in' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
header('Location: thank-you');

} else {
  echo "Error: " . $stmt->error;
}

// Close connection
$conn->close();
?>
