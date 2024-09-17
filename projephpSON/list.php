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

// Eğer "Listele" butonuna basıldıysa ve POST isteği yapıldıysa
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['listele'])) {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $tel = $_POST['tel'] ?? '';
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';
    // Randevu listeleme
    $sql = "SELECT * FROM zeybus_randevu ORDER BY date ASC"; // Randevuları sadece tarihine göre küçükten büyüğe sırala
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Randevular</title>
</head>
<body>
    <h2>Randevular</h2>
    <!-- Listele butonu -->
    <form method="post">
        <button type="submit" name="listele">Listele</button>
    </form>
    
    <!-- Tablo -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['listele'])) { ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Adı</th>
            <th>Email</th>
            <th>Telefon</th>
            <th>Tarih</th>
            <th>Saat</th>
        </tr>
        <?php
        // Tablodaki her bir satırı döngü ile oluştur
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["tel"]."</td>";
                echo "<td>".$row["date"]."</td>";
                echo "<td>".$row["time"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Randevu bulunamadı.</td></tr>";
        }
        ?>
    </table>
 
</body>
</html>

<?php
// Veritabanı bağlantısını kapat
$conn->close();
?>
