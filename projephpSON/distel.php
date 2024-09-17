<?php include 'header.php'; ?>

<section class="treatments">
    <h2>Tel Tedavisi</h2>
    <div class="gallery">
        <div class="image">
            <img src="tel1.jpeg" alt="Tel Tedavisi Resmi 1">
            <p>Tel tedavisi ile düzensiz dişlerinizi düzeltebilir ve sağlıklı bir gülüşe sahip olabilirsiniz.</p>
        </div>
        <div class="image">
            <img src="tel2.jpg" alt="Tel Tedavisi Resmi 2">
            <p>Tel tedavisi, dişler arasındaki boşlukları kapatmak ve dişlerinizi düzeltmek için kullanılan bir yöntemdir.</p>
        </div>
    </div>
    <div class="description">
        <p>Tel tedavisi, düzensiz dişlerin düzeltilmesi ve estetik bir gülüş elde etmek için kullanılan bir tedavi yöntemidir. Genellikle metal braketler veya şeffaf alignerlar kullanılarak uygulanır.</p>
        <p>Tel tedavisi, dişler arasındaki boşlukları kapatır, dişlerin hizalanmasını sağlar ve çiğneme fonksiyonunu düzeltebilir. Tedavi süresi ve yöntemi, bireysel ihtiyaçlara ve durumlara göre değişiklik gösterebilir.</p>
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
