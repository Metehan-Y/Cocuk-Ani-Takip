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
    $id       =    $_POST["kimlik"];
    $cocukadi  =    $_POST["cocukadi"];
    $olaytarihi  =    $_POST["olaytarihi"];
    $olaybasligi =    $_POST["olaybasligi"];
    $olayaciklamasi      =    $_POST["olayaciklamasi"];

    try
    {
        $sql = "UPDATE olaylar SET cocukadi='".$cocukadi."', olaytarihi='".$olaytarihi."', olaybasligi='".$olaybasligi."', olayaciklamasi='".$olayaciklamasi."' WHERE id=".$id."";
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
        header("Refresh: 2; url=ani.php");
    }
    catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
?>