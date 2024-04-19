<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$model = $_POST['models'];
$dealer = $_POST['bang'];
$state = $_POST['state']; 

$servername = "localhost";
$username = "u468158713_leads";
$password = "Honda@leads123";
$database = "u468158713_honda_leads";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement with placeholders to prevent SQL injection
$sql = "INSERT INTO Leads_info (NAME, MOBILE, EMAIL, MODEL, DEALER, STATE, DATE) 
        VALUES (?, ?, ?, ?, ?, ?, CURDATE())";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $name, $phone, $email, $model, $dealer, $state);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();

header("Location: thank-you.html"); // Redirect after successful submission

?>
