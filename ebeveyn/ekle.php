<?php
require_once '../db.php';
    if(isset($_SESSION['mail']))
    {
        $sorgu=$baglan->prepare("SELECT * FROM ebeveynler WHERE mail=?");
        $sorgu->execute(array($_SESSION['mail']));
        $islem=$sorgu->fetch();
    }
    else
    {
        header("Location:../index.php");
    }
    ?>
<?php

$yol=realpath(dirname(__FILE__)); 
// Form Gönderilmişmi Kontrolü Yapalım
if($_POST){

    $uploadfile="". htmlspecialchars($yol)."/img/".basename($_FILES['resim']['name']);
    
    $dosya=basename($_FILES['resim']['name']);
    
        if (move_uploaded_file($_FILES['resim']['tmp_name'], $uploadfile)) {
            
            $adsoyad  =    $_POST["adsoyad"];
            $dtarihi  =    $_POST["dtarihi"];
            $cinsiyet =    $_POST["cinsiyet"];
            $bio      =    $_POST["bio"];
            $ebeveynid=    $_SESSION["ebeveynid"];
            // Veritabanına Ekleyelim.
            $ekle        = $baglan->query("insert into cocuklar (adsoyad, dtarihi, cinsiyet, resim, bio, ebeveynid ) "
                                                        ."values ('$adsoyad','$dtarihi','$cinsiyet','$dosya','$bio','$ebeveynid')");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
            if($ekle){?>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Başarılı',
                        text:'Kayıt Başarılı',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
               <?php header("Refresh: 2; url=cocuklar.php");

            }else{
                header("Location:cocukekle.php");
            }




        }else {
            echo 'Dosya yüklemesinde bir hata var. Hata Kodu:'.$_FILES['resim']['error'];
        }


    
}
?>