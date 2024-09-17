<?php include 'header.php'; ?>

<section class="team">
    <h2>Ekibimiz</h2>
    <div class="team-group">
        <div class="team-member">
            <img src="zeynep.jpg" alt="Dr. Dt. Zeynep İrem Can">
            <h3>Dr. Dt. Zeynep İrem Can</h3>
            <p>Dr. Dt. Zeynep İrem Can, Ankara Üniversitesi Diş Hekimliği Fakültesi'nden mezun olmuştur ve yıllardır diş hekimliği alanında uzmanlaşmıştır. Güler yüzü ve profesyonel yaklaşımı ile hastalarımızın memnuniyetini sağlamaktadır.</p>
        </div>
        <div class="team-member">
            <img src="buse.jpeg" alt="Dr. Dt. Buse Kesebir">
            <h3>Dr. Dt. Buse Kesebir</h3>
            <p>Dr. Dt. Buse Kesebir, Ankara Üniversitesi Diş Hekimliği Fakültesi'nden mezun olmuştur ve estetik diş hekimliği konusunda uzmandır. Hastalarına sağladığı özenli ve dikkatli hizmet ile bilinir.</p>
        </div>
    </div>
    <div class="team-group">
        <div class="team-member">
            <img src="sinan.jpg" alt="Yardımcı Sağlık Personeli Sinan Aslan">
            <h3>Yardımcı Sağlık Personeli Sinan Aslan</h3>
            <p>Sinan Aslan, kliniğimizde yardımcı sağlık personeli olarak görev yapmaktadır. Hastalarımıza en iyi hizmeti sunmak için doktorlarımızla birlikte çalışır.</p>
        </div>
        <div class="team-member">
            <img src="ayse.jpg" alt="Sekreter Ayşe Kaplan">
            <h3>Sekreter Ayşe Kaplan</h3>
            <p>Ayşe Kaplan, kliniğimizin güler yüzlü ve yardımsever sekreteridir. Hastalarımızın randevularını düzenler ve kliniğimizdeki operasyonların sorunsuz bir şekilde yürütülmesini sağlar.</p>
        </div>
    </div>
</section>

<style>
    .team {
        text-align: center;
        padding: 50px 20px;
        background-color: #f4f4f4;
    }

    .team h2 {
        font-size: 32px;
        margin-bottom: 40px;
        color: #333;
    }

    .team-group {
        display: flex;
        justify-content: center;
        margin-bottom: 40px;
    }

    .team-member {
        flex: 1;
        max-width: 400px;
        background-color: #faf0e6; /* Soft renk */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: 0 20px;
    }

    .team-member img {
        width: 100%;
        height: auto;
        border-radius: 50%;
        margin-bottom: 20px;
    }

    .team-member h3 {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
    }

    .team-member p {
        font-size: 16px;
        color: #555;
        line-height: 1.5;
    }
</style>

<?php include 'footer.php'; ?>
