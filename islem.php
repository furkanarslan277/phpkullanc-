

<?php 

  require_once 'index11.php'; 

if (isset($_POST['bilgilerim_ad'], $_POST['bilgilerim_soyad'], $_POST['bilgilerim_mail'])) {

    $bilgilerim_ad= trim(filter_input(INPUT_POST, 'bilgilerim_ad', FILTER_SANITIZE_STRING));
    $bilgilerim_soyad = trim(filter_input(INPUT_POST, 'bilgilerim_soyad', FILTER_SANITIZE_STRING));
    $bilgilerim_mail = trim(filter_input(INPUT_POST, 'bilgilerim_mail', FILTER_SANITIZE_EMAIL));

    if (empty($bilgilerim_ad) || empty($bilgilerim_soyad) || empty($bilgilerim_mail )) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }

    
        die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
    }

    $baglanti = new mysqli("localhost", "root", "", "bilgilerim");

    if ($baglanti->connect_errno > 0) {
        die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
    }

    $baglanti->set_charset("utf8");

    $sorgu = $baglanti->prepare("INSERT INTO bilgilerim(bilgilerim_adi, bilgilerim_soyad, bilgilerim_mail) VALUES(?, ?, ?)");

    $sorgu->bind_param('sss', $bilgilerim_ad, $bilgilerim_soyad, $bilgilerim_mail);
    $sorgu->execute();

    if ($baglanti->errno > 0) {
        die("<b>Sorgu Hatası:</b> " . $baglanti->error);
    }

    echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";

    $sorgu->close();
    $baglanti->close();


?>