<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Accordion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'header.php'; ?>

<section class="faq">
    <h2>Sıkça Sorulan Sorular</h2>
    <div class="faq-item">
        <h3>Çocuğumda diş hekimi korkusu olmaması için ne yapmalıyım? <span class="toggle">+</span></h3>
        <p class="answer">Çocukların ilk diş hekimi muayeneleri diş hekimi korkusu oluşmaması için oldukça önemlidir. Ilk muayenenin mutlaka çocuk diş hekimi tarafından yapılması gerekir. Yine de aşırı kaygılı ve korkan çocukların tedavisinin klinikte zorla değil, genel anestezi veya sedasyon altında yapılması en güvenilir yöntemdir.</p>
    </div>
    <div class="faq-item">
        <h3>Dişlerimi fırçalarken diş etlerim çok kanıyor ne yapmalıyım?    <span class="toggle">+</span></h3>
        <p class="answer">Diş etlerinin kanaması normal bir durum değildir. Düzenli ya da doğru diş fırçalamama sonucu özellikle diş ve diş eti birleşim bölgesinde yemek artıkları birikmektedir. Bu bölgelere fırçanın değmemesi zamanla bu artıkların sertleşerek diş taşına dönüşmesine neden olmaktadır. Diş taşları, diş eti sağlının bozulmasına, diş eti hastalığına (ginigivitis) ve bu bölgelerde kanamaya neden olmaktadır. Diş etleri kanadığı için bu bölgelerin fırçalanmaması olayın daha da ilerlemesine neden olmaktadır. Bu durumda yapılması gereken diş hekimine muayene olup diş taşları temizlendikten sonra doğru fırçalamanın düzenli olarak yapılmasıdır.</p>
    </div>
    <div class="faq-item">
        <h3>Diş beyazlatma zararlı mı?    <span class="toggle">+</span></h3>
        <p class="answer">Dişler yıllar içerisinde yiyecekler, içecekler (kahve, şarap ve çay) ve sigara tüketimi nedeniyle beyazlıklarını kaybedebilirler. Diş taşı temizliği ve parlatma işlemi ile yüzey lekeleri giderilebilse de diş renginde bir açılma sağlanamamaktadır. Diş renginin açılması beyazlatma işlemi ile yapılabilmektedir. İki tip tedavi yöntemi vardır. Bunlardan ilki diş hekiminizin muayenehanesinde daha hızlı sonuç alınan yöntemdir (Office bleaching), diğeri ise evinizde kendinizin uygulayacağı yöntemdir (Home bleaching). Beyazlatma işlemi doğru hasta (ağız hijyeni iyi olan sağlıklı diş ve diş etlerine sahip) endikasyonu ile oldukça başarılı sonuçlar vermektedir. Kliniklerde hekim tarafından uygulanan beyazlatma işlemi daha kontrollü ve diş etleri açısından daha güvenli olduğu için daha çok tercih edilmektedir.</p>
    </div>
    <div class="faq-item">
        <h3>Ağız kokusu neden olabilir?    <span class="toggle">+</span></h3>
        <p class="answer">Ağız kokusu fizyolojik ya da patolojik(hastalık durumunda ortaya çıkan) olabilir. Fizyolojik ağız kokusu sabah uyanınca ortaya çıkan ağız kokusudur. Tükürük salgısının azlığı, susuz kalma, açlık ve bazı vitamin ve mineral eksikliği (vit A B12, çinko ve fe eksikliği) neden olabilir. Bunların dışında ağız kokusunun çok sayıda nedeni olabilir. Bunlar; ağız içi nedenler( dilin üzerinde biriken gıda artıkları, tükürük, bakteri, dişeti iltihabı, ağız içi enfeksiyonlar, diş eti hastalıkları, diş çürükleri), solunum yolu hastalıkları (sinüzit, geniz akıntısı, burun iltihabı, akciğer enfeksiyonları), mide-barsak sistemine bağlı hastalıklar (reflü, parazit), sistemik hastalıklara bağlı koku (diyabet, kan hastalıkları, böbrek yetmezliği), ilaç kullanımına bağlı ya da yiyecek içecek tüketimine bağlı olabilir. Doğru nedenin tespit edilebilmesi için öncelikle diş hekimi muayenesi gereklidir. Ağız içi nedenler ortadan kaldırıldıktan sonra devam eden ağız kokusu varlığında altta yatan sistemik ve olası hastalıklar açısından doktor kontrolü önerilir.</p>
    </div>
    <div class="faq-item">
        <h3>Çocuğumun daimi dişlerinin çıkarken çarpık çıkması normal mi?    <span class="toggle">+</span></h3>
        <p class="answer">Daimi dişlerin boyutlarının süt dişlerinden daha büyük olmasına bağlı olarak ilk defa çıkan dişlerin olduğu, özellikle alt ön bölgede çapraşıklık ortaya çıkabilir. Bu dönem için bu durum normaldir. Daha sonra büyüme gelişme ile beraber bu durum bir miktar daha düzelebilmekte ya da tamamen ortadan kalkabilmektedir. Düzenli diş hekimi kontrolleri ile bu süreç takip edilmeli gerek görülürse o zaman ortodontik tedaviye yönlendirilmelidir.</p>
    </div>
</section>

<style>
    .faq {
        text-align: center;
        padding: 50px 20px;
        background-color: #f9f9f9;
    }

    .faq h2 {
        font-size: 35px;
        margin-bottom: 40px;
        color: #333;
    }

    .faq-item {
        max-width: 600px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: left;
        margin-bottom: 20px;
    }

    .faq-item h3 {
        font-size: 20px;
        color: #333;
        margin-bottom: 10px;
        cursor: pointer;
        position: relative;
        padding-right: 40px; 

    }

    .faq-item h3 .toggle {
        position: absolute;
        right: 0;
        top: 0;
        font-size: 24px;
        color: #800080;
        cursor: pointer;
    }

    .faq-item p {
        font-size: 16px;
        color: #555;
        line-height: 2.0;
        display: none;
        margin-top: 10px;
    }

    .faq-item.active p {
        display: block;
    }
    
</style>

<?php include 'footer.php'; ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var toggles = document.querySelectorAll(".faq-item h3");

        toggles.forEach(function(toggle) {
            toggle.addEventListener("click", function() {
                var parent = toggle.parentElement;
                parent.classList.toggle("active");
            });
        });
    });
</script>

</body>
</html>
