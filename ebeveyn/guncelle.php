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

if($_POST)
{
    $id       =    $_GET["id"];
    $adsoyad  =    $_POST["adsoyad"];
    $dtarihi  =    $_POST["dtarihi"];
    $cinsiyet =    $_POST["cinsiyet"];
    $bio      =    $_POST["bio"];

    try
    {
        $sql = "UPDATE cocuklar SET adsoyad='".$adsoyad."', dtarihi='".$dtarihi."', cinsiyet='".$cinsiyet."', bio='".$bio."' WHERE id=".$id."";
        $stmt = $baglan->prepare($sql);
        $stmt->execute();
        ?>
        <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Başarılı',
                        text:'Güncelleme Başarılı.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
        <?php
        header("Refresh: 2; url=cocuklar.php");
    }
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
?>