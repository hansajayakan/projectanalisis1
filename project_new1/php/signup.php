<?php
// Include koneksi database
include 'db.php';

$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hash password untuk keamanan

$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman success dengan pesan
    header("Location: success.php?message=created");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
