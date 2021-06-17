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

if($_POST){

    $uploadfile="". htmlspecialchars($yol)."/img/".basename($_FILES['resim']['name']);
    
    $dosya=basename($_FILES['resim']['name']);
    
        if (move_uploaded_file($_FILES['resim']['tmp_name'], $uploadfile)) {
            
            $cocukid  =    $_POST["cocukid"];
            $cocukadi  =    $_POST["cocukadi"];
            $tarih =    $_POST["tarih"];
            $aciklama =    $_POST["aciklama"];
            
            $ekle        = $baglan->query("insert into galeri (cocukid, cocukadi, resim, tarih, aciklama) "
                                                        ."values ('$cocukid','$cocukadi','$dosya','$tarih','$aciklama')");
            
            
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
               <?php header("Refresh: 2; url=fotograf.php");

            }else{
                header("Location:fotografekle.php");
            }




        }else {
            echo 'Dosya yüklemesinde bir hata var. Hata Kodu:'.$_FILES['resim']['error'];
        }


    
}
?>