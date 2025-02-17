<?php
include ("th7.php");

    $id=$_POST["id"];
    $name=$_POST["pack"];

    $connect = mysqli_connect("localhost","root","","ice-shop");
$result = mysqli_query($connect,"UPDATE `mahsol` SET `aname`='$name' WHERE id = $id");
mysqli_close($connect);

if ($result===true) {?> 
<script>
    alert("ذخیره شد")
location.replace("mahsolat.php");
</script>
<?php
}
else
{
?>

<script>
alert("ذخیره نشد")
location.replace("mahsolat.php");
</script>
<?php 
}
?>

<?php
include ("tf7.html");
?>