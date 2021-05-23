<?php
    if(isset($_POST['girisKullaniciAdi'], $_POST['girisSifre']) && ($_POST['girisKullaniciAdi']!='') && ($_POST['girisSifre']!='')){
        echo "<b>"."Giriş Yapıldı..."."</b>"."<br>";
        echo "Kullanıcı Adı: ".$_POST['girisKullaniciAdi']."<br>"; 
        echo "Parola: ".$_POST['girisSifre'];
    }
    else{
        echo"Bilgilerinizi kontrol edip tekrar giriş yapınız.<br>
            Eksik Bilgi Girdiniz...";
    }
        

    echo "<p> <a href= 'giris.html'>&lt;SAYFAYA GERİ DÖN&gt;</a></p> ";

?>