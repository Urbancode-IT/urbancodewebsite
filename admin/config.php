<?php
$servername = "localhost";
$username = "u935057905_urban";
$password = "KFC$23@k";
$database = "u935057905_urban";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


/*$sql = "CREATE TABLE referrals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    uc_id VARCHAR(10) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    course VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL,
    payment VARCHAR(255) NOT NULL,
    referral_fee VARCHAR(255) NOT NULL,
    comments TEXT
)"; 

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
*/
?>
