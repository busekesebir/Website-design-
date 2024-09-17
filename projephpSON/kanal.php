<?php include 'header.php'; ?>

<section class="treatments">
    <h2>Kanal Tedavisi</h2>
    <div class="gallery">
        <div class="image">
            <img src="kanal1.jpg" alt="Kanal Tedavisi Resmi 1">
            <p>Kanal tedavisi ile dişin içindeki enfeksiyonları temizleyin ve dişinizi koruyun.</p>
        </div>
        <div class="image">
            <img src="kanal2.jpeg" alt="Kanal Tedavisi Resmi 2">
            <p>Kanal tedavisi, dişin iç kısmındaki hasarları onarmak ve dişin doğal yapısını korumak için uygulanan bir tedavi yöntemidir.</p>
        </div>
    </div>
    <div class="description">
        <p>Kanal tedavisi, dişin iç kısmında bulunan pulp dokusunun çıkarılması ve boşaltılması işlemidir. Bu işlem genellikle dişin çürük, travma veya diğer nedenlerle hasar görmesi durumunda uygulanır.</p>
        <p>Kanal tedavisi, dişin iç kısmındaki enfeksiyonu temizleyerek dişin kaybını önler ve dişin doğal yapısını korur. Kanal tedavisi genellikle lokal anestezi altında yapılır ve genellikle birkaç ziyaret gerektirir.</p>
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
