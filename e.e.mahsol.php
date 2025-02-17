<?php
include ("th7.php");

    
$id=$_GET["id"];
?>
<form action="e.mahsol.php" method="post">
<input type="text" name ="id" hidden  value="<?php echo($id); ?>">
<input type="text" name ="pack" placeholder="نام جدید پک را وارد گنید">
<input type="submit" value="ثبت">
</form>
    <?php
include ("tf7.html");
?>