<?php include 'header.php'; ?>

<section class="appointment">
    <h2>Online Randevu</h2>
    <form id="zeybus_randevu" action="manage.php" method="post">
        <div class="form-group">
            <label for="name">Adınız ve Soyadınız:</label>
            <input type="text" id="name" name="name" required placeholder="Adınızı girin">
        </div>
        <div class="form-group">
            <label for="email">E-posta Adresiniz:</label>
            <input type="email" id="email" name="email" placeholder="E-posta adresinizi girin">
        </div>
        <div class="form-group">
            <label for="phone">Telefon Numaranız:</label>
            <input type="tel" id="phone" name="phone" required placeholder="Telefon numaranızı girin">
        </div>
        <div class="form-group">
            <label for="date">Randevu Tarihi:</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="time">Randevu Saati:</label>
            <input type="time" id="time" name="time" required>
        </div>
        <div class="form-group">
            <label for="message">Ek Not (isteğe bağlı):</label>
            <textarea id="message" name="message" placeholder="Ek notunuzu buraya yazın"></textarea>
        </div>
        <button type="submit">Randevu Al</button>
    </form>
</section>

<style>
    .appointment {
        text-align: center;
        padding: 50px 20px;
        background-color: #f9f9f9;
    }

    .appointment h2 {
        font-size: 32px;
        margin-bottom: 40px;
        color: #333;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
    }

    .form-group input,
    .form-group textarea {
        width: 70%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .form-group textarea {
        resize: none;
        height: 100px;
    }

    button[type="submit"] {
        background-color: #6666FF;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #FF00FF;
    }
</style>

<script>
    document.getElementById('zeybus_randevu').addEventListener('submit', function(event) {
        event.preventDefault();
        
        var form = document.getElementById('zeybus_randevu');
        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", form.action, true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                // Randevu başarıyla oluşturulduğunda kullanıcıya pop-up mesajı göster
                alert("Randevunuz başarıyla oluşturuldu!");
            } else {
                // Başarısız durumda kullanıcıya hata mesajı göster
                alert('Bu saate randevu alamazsınız.');
            }
        };
        xhr.send(formData);
    });
</script>

<?php include 'footer.php'; ?>
