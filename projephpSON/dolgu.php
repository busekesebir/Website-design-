<?php include 'header.php'; ?>

<section class="treatments">
    <h2>Dolgu Tedavisi</h2>
    <div class="gallery">
        <div class="image">
            <img src="dolgu1.jpg" alt="Dolgu Tedavisi Resmi 1">
            <p>Dolgu tedavisi ile çürük dişlerinizi onarın ve sağlıklı bir ağız sağlayın.</p>
        </div>
        <div class="image">
            <img src="dolgu2.jpeg" alt="Dolgu Tedavisi Resmi 2">
            <p>Dolgu, dişlerdeki çürüklerin doldurulması ve dişlerin eski fonksiyonunu geri kazanması için uygulanan bir tedavidir.</p>
        </div>
    </div>
    <div class="description">
        <p>Dolgu tedavisi, dişlerdeki çürüklerin temizlenmesi ve dolgu malzemesi ile doldurulması işlemidir. Çürüklerin tedavi edilmemesi durumunda dişlerde ağrı, hassasiyet ve diğer diş problemleri ortaya çıkabilir.</p>
        <p>Dolgu malzemeleri genellikle kompozit reçine veya amalgam olarak adlandırılan bir tür alaşımdan yapılır. Dolgu tedavisi ile dişlerin sağlamlaştırılması, çürüklerin önlenmesi ve estetik bir görünüm elde edilmesi sağlanır.</p>
    </div>
</section>

<style>
    .treatments {
        text-align: center;
        padding: 50px 20px;
        background-color: #f9f9f9;
    }

    .treatments h2 {
        font-size: 32px;
        margin-bottom: 40px;
        color: #333;
    }

    .gallery {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
        margin-bottom: 30px;
    }

    .image {
        width: 300px;
    }

    .image img {
        width: 100%;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .image p {
        margin-top: 10px;
        color: #555;
    }

    .description p {
        font-size: 18px;
        color: #666;
        margin-bottom: 20px;
    }
</style>

<?php include 'footer.php'; ?>
