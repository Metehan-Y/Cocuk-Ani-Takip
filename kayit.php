<?php
require_once 'db.php'; 

        if($_POST){

            $adsoyad        =    $_POST["adsoyad"];
            $mail           =    $_POST["mail"];
            $sifre          =    $_POST["sifre"];
            $cinsiyet       =    $_POST["cinsiyet"];
            $dtarihi        =    $_POST["dtarihi"];
            $es_adsoyad     =    $_POST["es_adsoyad"];
            $es_dtarihi     =    $_POST["es_dtarihi"];
            $es_cinsiyet    =    $_POST["es_cinsiyet"];
            // Veritabanına Ekleyelim.
            $ekle        = $baglan->query("insert into ebeveynler (adsoyad, mail, sifre, cinsiyet, dtarihi, es_adsoyad, es_dtarihi, es_cinsiyet ) "
                                                        ."values ('$adsoyad','$mail','$sifre','$cinsiyet','$dtarihi','$es_adsoyad','$es_dtarihi','$es_cinsiyet')");
            

            if($ekle){?>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Başarılı',
                        text:'Kayıt Başarılı, Lütfen Giriş Yapınız',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
               <?php header("Refresh: 2; url=index.php");

            }else{
                header("Location:index.php");
            }
        }
?>