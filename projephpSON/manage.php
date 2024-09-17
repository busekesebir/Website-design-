<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zeybus";

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$id = $_POST['id'] ?? '';
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$date = $_POST['date'] ?? '';
$time = $_POST['time'] ?? '';
/* $message = $_POST['message'] ?? ''; */

// Aynı saatte başka bir randevu var mı kontrol et
$sql = "SELECT * FROM zeybus_randevu WHERE date = '$date' AND time = '$time'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    // Aynı saatte randevu varsa hata mesajı döndür
    http_response_code(400);
    echo "Bu saatte zaten bir randevu mevcut. Lütfen farklı bir saat seçin.";
} else {
    // Yeni randevuyu veritabanına ekle
    $sql = "INSERT INTO zeybus_randevu (id, name, email, tel, date, time ) VALUES ('$id', $name', '$email', '$phone', '$date', '$time')";
    if ($conn->query($sql) === TRUE) {
        // Randevu başarıyla oluşturulduğunda 200 kodu döndür
        http_response_code(200);
        echo "Randevu başarıyla oluşturuldu!";
    } else {
        // Hata durumunda 500 kodu döndür
        http_response_code(500);
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
