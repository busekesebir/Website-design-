<?php

$servername = "localhost";
$username = "root";
$password = ""; // Şifreyi boş bırakın

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error){
    die("Bağlantı Başarısız: " . $conn->connect_error);
}

$sql = "CREATE DATABASE zeybus"; // Tabloyu oluşturmadan önce var olup olmadığını kontrol et
if ($conn->query($sql) === TRUE) {
    echo "Veritabanı başarıyla oluşturuldu";
} else {
    echo "Error creating database: " . $conn->error;
}


$conn->close();

?>