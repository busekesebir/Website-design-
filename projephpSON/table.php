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

// room_reservations tablosunu oluştur (varsa önceki tabloyu sil)
$sql = "DROP TABLE IF EXISTS zeybus_randevu";
$conn->query($sql);

$sql = "CREATE TABLE zeybus_randevu(
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 name VARCHAR(50),
 email VARCHAR(50),
 tel VARCHAR(15),
 date DATE NOT NULL,
 time TIME NOT NULL,
 message TEXT NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tablo başarıyla oluşturuldu";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>