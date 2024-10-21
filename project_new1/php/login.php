<?php
// Include koneksi database
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Jika login berhasil, arahkan ke halaman materi
        header("Location: ../materi.php");
    } else {
        echo "Password salah! <a href='../index.html'>Coba lagi</a>";
    }
} else {
    echo "Email tidak terdaftar! <a href='../index.html'>Coba lagi</a>";
}

$conn->close();
?>
