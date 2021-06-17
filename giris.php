<?php
require_once 'db.php'; 
    if($_POST)
    {
        $Kullanici=$_POST["mail"];
        $Sifreniz=$_POST["sifre"];
		$_SESSION['mail']=$Kullanici;
 
        if(!empty($Kullanici) || !empty($Sifreniz))
        {
            $sorgu=$baglan->prepare("SELECT * FROM ebeveynler WHERE mail=? and sifre=?");
            $sorgu->execute(array($Kullanici,$Sifreniz));
            $islem=$sorgu->fetch();
 
            if($islem)
            {
                $_SESSION['mail'] = $islem['mail'];
                $_SESSION['ebeveynid'] = $islem['id'];
                ?>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Başarılı',
                        text:'Giriş Başarılı, Lütfen Bekleyin Yönlendiriyorum.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
                <?php
                header("Refresh: 2; url=ebeveyn/cocuklar.php");
            }
            else
            {
                ?>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Hata',
                        text:'Kullanıcı Adınız veya Şifreniz Yanlış.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
                <?php
                header("Refresh: 2; url=index.php");
				
            }
        }
        else
        {
            ?>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Hata',
                        text:'Lütfen Boş Alan Bırakmayınız.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
                <?php
                header("Refresh: 2; url=index.php");
        }
    } 
?>