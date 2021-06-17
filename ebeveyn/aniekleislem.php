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

    $uploadfile="". htmlspecialchars($yol)."/img/".basename($_FILES['olayresim']['name']);
    
    $dosya=basename($_FILES['olayresim']['name']);
    
        if (move_uploaded_file($_FILES['olayresim']['tmp_name'], $uploadfile)) {
            
            $cocukadi       =    $_POST["cocukadi"];
            $olaytarihi     =    $_POST["olaytarihi"];
            $olaybasligi    =    $_POST["olaybasligi"];
            $olayaciklamasi =    $_POST["olayaciklamasi"];
            // Veritabanına Ekleyelim.
            $ekle        = $baglan->query("insert into olaylar (cocukadi, olaytarihi, olaybasligi, olayaciklamasi, olayresim ) "
                                                        ."values ('$cocukadi','$olaytarihi','$olaybasligi','$olayaciklamasi','$dosya')");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
            if($ekle){?>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Başarılı',
                        text:'Anı Kaydı Başarılı',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
               <?php header("Refresh: 2; url=ani.php");

            }else{
                header("Location:ani.php");
            }




        }else {
            echo 'Dosya yüklemesinde bir hata var. Hata Kodu:'.$_FILES['resim']['error'];
        }


    
}
?>