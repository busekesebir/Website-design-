<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeybus Diş Kliniği</title>
    <link rel="stylesheet" type="text/css" href="css/styles.php">
    <style>
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
            position: relative;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
            top: 100%; /* This will position the dropdown below the "Tedaviler" link */
            left: 0; /* Align the dropdown with the left edge of the parent */
        }

        nav ul li:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<header>
    <h1>Zeybus Diş Kliniği</h1>
    <nav>
        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="about.php">Hakkımızda</a></li>
            <li class="dropdown">
                <a href="#">Tedaviler</a>
                <div class="dropdown-content">
                    <a href="ortodonti.php">Ortodonti</a>
                    <a href="estetik.php">Gülüş Estetiği</a>
                    <a href="dolgu.php">Dolgu</a>
                    <a href="kanal.php">Kanal Tedavisi</a>
                    <a href="distel.php">Diş Teli Tedavisi</a>
                </div>
            </li>
            <li><a href="team.php">Ekibimiz</a></li>
            <li><a href="faq.php">Sıkça Sorulan Sorular</a></li>
            <li><a href="appointment.php">Online Randevu</a></li>
        </ul>
    </nav>
</header>
<main>
