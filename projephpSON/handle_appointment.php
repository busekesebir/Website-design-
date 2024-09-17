<?php
// Veritabanı bağlantısı
include_once 'config.inc.php';

// Form verilerini al
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$date = $_POST['date'] ?? '';
$time = $_POST['time'] ?? '';
$message = $_POST['message'] ?? '';

// Veritabanına ekle
$sql = "INSERT INTO appointments (name, email, phone, date, time, message) VALUES ('$name', '$email', '$phone', '$date', '$time', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Randevu başarıyla alındı";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
