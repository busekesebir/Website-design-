<?php
session_start();

// Oturum kontrolü yap
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit;
}

// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zeybus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Silme isteği geldiğinde
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Silinecek randevunun adını al
    $id = $_GET['id'];

    // Silme sorgusu
    $sql = "DELETE FROM zeybus_randevu WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Randevu başarıyla silindi.');</script>";
        // Silme işlemi başarılı olduğunda admin paneline geri yönlendir
        header('Location: admin_panel.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>