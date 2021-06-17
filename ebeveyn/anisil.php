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

if($_GET["id"]){
    $id=$_GET["id"];
    $sql = "DELETE FROM olaylar WHERE id=".$id;

    if ($baglan->query($sql) == TRUE) {
    
        ?>
        <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Başarılı',
                        text:'Silme Başarılı.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
        <?php
        header("Refresh: 2; url=ani.php");

    } else {
        ?>
        <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Hata',
                        text:'Kayıt Silinemedi.',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
        <?php
        header("Refresh: 2; url=ani.php");
    }
}

?>