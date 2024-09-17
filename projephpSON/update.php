<!DOCTYPE html>
<html>
<head>

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

// Eğer form gönderilmişse (yani güncelle butonuna basılmışsa)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $tel = $_POST['tel'] ?? '';
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';

    // Randevu güncelleme sorgusu
    $sql = "UPDATE zeybus_randevu 
            SET id= '$id', name='$name', email='$email', tel='$tel', date='$date', time='$time'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Eğer güncelleme başarılıysa JavaScript ile bir pop-up mesajı görüntüle
        echo "<script>
            alert('Randevu başarıyla güncellendi.');
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// ID parametresini al
$id = isset($_GET['id']) ? $_GET['id'] : '';
if ($id === '') {
    // Eğer id parametresi eksikse veya boşsa, hata mesajı göster veya yönlendir.
    header('Location: admin_panel.php');
    exit;
}

// Veritabanından randevu bilgilerini al
$sql = "SELECT * FROM zeybus_randevu WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    // Eğer veritabanında böyle bir randevu ID bulunamazsa, admin paneline yönlendir
    header('Location: admin_panel.php');
    exit;
}

$conn->close();
?>

    <title>Randevu Güncelle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 350px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="tel"],
        form input[type="date"],
        form input[type="time"],
        form textarea {
            width: calc(100% - 18px);
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        form button {
            width: calc(100% - 18px);
            padding: 10px;
            background-color: #6666FF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #FF00FF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Randevu Güncelle</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div>
                <label for="name">Adı:</label>
                <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            <div>
                <label for="tel">Telefon:</label>
                <input type="tel" id="tel" name="tel" value="<?php echo $row['tel']; ?>" required>
            </div>
            <div>
                <label for="date">Tarih:</label>
                <input type="date" id="date" name="date" value="<?php echo $row['date']; ?>" required>
            </div>
            <div>
                <label for="time">Saat:</label>
                <input type="time" id="time" name="time" value="<?php echo $row['time']; ?>" required>
            </div>
            <button type="submit" onclick="showAlert()">Güncelle</button>
        </form>
    </div>

    <script>
        function showAlert() {
            alert('Randevu başarıyla güncellendi.');
        }
    </script>
</body>
</html>