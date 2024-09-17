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

// Eğer form gönderilmişse (yani ekle butonuna basılmışsa)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $tel = $_POST['tel'] ?? '';
    $date = $_POST['date'] ?? '';
    $time = $_POST['time'] ?? '';

    // Randevu ekleme sorgusu
    $sql = "INSERT INTO zeybus_randevu (id, name, email, tel, date, time) 
            VALUES ('$id','$name', '$email', '$tel', '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Randevu başarıyla eklendi.EKLEMEE');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Randevu listeleme
$sql = "SELECT * FROM zeybus_randevu";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        form button {
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

        .btn {
            text-decoration: none;
            padding: 6px 10px;
            background-color: #6666FF;
            color: #fff;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #FF00FF;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
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

        form button[type="submit"] {
            width: calc(100% - 18px);
            padding: 10px;
            background-color: #6666FF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button[type="submit"]:hover {
            background-color: #FF00FF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Randevular</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <button type="submit">Listele</button>
        </form>
        <table>
            <tr>
                <th>ID</th>
                <th>Adı</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Tarih</th>
                <th>Saat</th>
                <th>İşlemler</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["tel"]."</td>";
                    echo "<td>".$row["date"]."</td>";
                    echo "<td>".$row["time"]."</td>";
                    echo "<td><a class='btn' href='update.php?id=".$row["id"]."'>Güncelle</a> | <a class='btn' href='delete.php?id=".$row["id"]."'>Sil</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Randevu bulunamadı.</td></tr>";
            }
            ?>
        </table>
    </div>

     
 <div class="container">
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
            <button type="submit">Randevu Ekle</button>
        </form>
    </div> 
     </body>
</html>

<?php
$conn->close();
?>