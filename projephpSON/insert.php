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

// Ekleme formu gönderilmiş mi diye kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $tel = $_POST['tel'] ?? '';
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';
    $message = $_POST['message'] ?? '';

    // Randevu ekleme sorgusu
    $sql = "INSERT INTO zeybus_randevu (name, email, tel, date, time, message) 
            VALUES ('$name', '$email', '$tel', '$date', '$time', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Yeni randevuyu ekledikten sonra, kullanıcıyı tekrar insert.php sayfasına yönlendiriyoruz
        header('Location: insert.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randevu Ekle</title>
</head>
<body>
    <h2>Randevu Ekle</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="name">Adı:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="tel">Telefon:</label>
            <input type="tel" id="tel" name="tel" required>
        </div>
        <div>
            <label for="date">Tarih:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div>
            <label for="time">Saat:</label>
            <input type="time" id="time" name="time" required>
        </div>
        <div>
            <label for="message">Not:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Randevu Ekle</button>
    </form>
</body>
</html>