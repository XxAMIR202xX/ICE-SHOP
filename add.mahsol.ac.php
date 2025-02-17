<?php
include("th7.php");
?>
            <!-- ************************* -->
            
            <div class="container">

            <?php

            
$name = $_POST["name"];


$o=mysqli_connect("localhost","root","","ice-shop");
mysqli_query($o,"INSERT INTO `mahsol`(`aname`)
        VALUES ('$name')");
mysqli_close($o);
if($o ==true)
{
        ?>
        <script>
        
        alert ("محصول با موفقیت اضافه شد");

        location.replace("mahsolat.php")
        </script>
<?php
}
else
{
?>
<script>
    location.replace("mahsolat.php")
    alert ("ایجاد حساب با موفقیت انجام نشد");

    
    </script>
<?php
}
?>

</div>

            <!-- ************************* -->
<?php
include("tf7.html");
?>