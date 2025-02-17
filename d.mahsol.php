<?php
include ("th7.php");

    $id=$_GET["id"];

    $connect = mysqli_connect("localhost","root","","ice-shop");
$result = mysqli_query($connect,"DELETE FROM `mahsol` WHERE id = $id");
mysqli_close($connect);

if ($result===true) {?> 
<script>
    alert("حذف شد")
location.replace("mahsolat.php");
</script>
<?php
}
else
{
?>

<script>
alert("حذف نشد")
location.replace("mahsolat.php");
</script>
<?php 
}
?>

    <?php
include ("tf7.html");
?>