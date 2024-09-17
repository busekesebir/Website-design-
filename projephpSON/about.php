<?php include 'header.php'; ?>

<style>
    .about-section {
        padding: 40px;
        text-align: center;
        background-color: #f9f9f9;
    }

    .about-section h2 {
        color: #333;
        font-size: 32px;
        margin-bottom: 20px;
    }

    .about-content {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .about-text {
        flex: 1;
        max-width: 600px;
        color: #555;
        text-align: left;
        font-size: 18px;
    }

    .about-image {
        flex: 1;
        max-width: 400px;
        margin-left: 40px; /* Resmi sağa yakınlaştırmak için margin ekledik */
    }

    .about-image img {
        width: 70%;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Medya Sorguları */
    @media (max-width: 768px) {
        .about-content {
            flex-direction: column;
        }

        .about-text, .about-image {
            max-width: 100%;
            margin-left: 0; /* Küçük ekranlarda margin kaldırıldı */
        }
    }
</style>

<section class="about-section">
    <h2>Hakkımızda</h2>
    <div class="about-content">
        <div class="about-text">
            <p>Biz Zeynep ve Buse, üniversiteyi Ankara'da okurken tanışan iki öğrenciyiz. Tanıştığımız günden beri hep ortak güzel bir klinik açma hayalimiz vardı. Bu hayalimiz, bugün Zeybus Diş Kliniği olarak hayat buldu.</p>
            <p>Uzun yıllardır hizmet veren kliniğimiz, en son teknoloji ekipmanlar ve güler yüzlü personelimiz ile siz değerli hastalarımıza en iyi hizmeti sunmayı amaçlıyoruz.</p>
        </div>
        <div class="about-image">
            <img src="doktor1.jpg" alt="Zeynep ve Buse">
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

