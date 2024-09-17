<?php
header("Content-type: text/css; charset: UTF-8");
?>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
}

header h1 {
    margin: 25px 0; /* Başlık ve altındaki başlıklar arasına mesafe koy */
    font-size: 26px; /* Başlık yazısının boyutunu ayarla */
    text-align: center; /* Başlığı ortala */
}

nav {
    text-align: center; /* Menüyü ortala */
}

nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0; /* Liste öğeleri arasındaki varsayılan boşlukları kaldır */
}

nav ul li {
    display: inline;
    margin: 0 10px; /* Liste öğeleri arasında eşit boşluklar bırak */
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

section.hero {
    background-image: url('hero-image.jpg');
    background-size: cover;
    color: #fff;
    text-align: center;
    padding: 100px 0;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

/* Medya Sorguları */
@media (max-width: 768px) {
    header {
        padding: 10px;
    }

    nav ul li {
        display: block;
        margin-bottom: 10px;
    }

    section.hero {
        padding: 50px 0;
    }
}

