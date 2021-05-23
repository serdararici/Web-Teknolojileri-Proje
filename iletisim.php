<?php
error_reporting(0);
    if(isset($_POST['ad'], $_POST['soyad']))
    {
        echo "Form Gönderildi..."."<br>";
        echo "Adınız: ".$_POST['ad']."<br>";
        echo "Soyadınız: ". $_POST['soyad']."<br>";
        echo "Email: ".$_POST['email']."<br>";
        echo "Telefon: ".$_POST['tel']."<br>";
        echo "Şehriniz: ".$_POST['iller']."<br>";
        echo "Cinsiyetiniz: ".$_POST['cinsiyet']."<br>";
        echo "Öneri: ".$_POST['öneri']."<br>";
    }
    else{
        echo"Eksik Bilgi Girdiniz...";
    }

    echo "<p> <a href= 'iletisim.html'>&lt;SAYFAYA GERİ DÖN&gt;</a></p> ";

?>