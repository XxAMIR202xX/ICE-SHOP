

<?php
include("th7.php");
?>
            <!-- ************************* -->
            
            <div class="container">

            <?php

            
$fname = $_POST["fname"];

$username = $_POST["username"];

$email = $_POST["email"];

$pass = $_POST["pass"];

$repass = $_POST["repass"];

$telefon = $_POST["telefon"];


$o=mysqli_connect("localhost","root","","ice-shop");
mysqli_query($o,"INSERT INTO `login`(`fname`, `username`, `email`, `pass`, `telefon`)
        VALUES ('$fname','$username','$email','$pass','$telefon')");
mysqli_close($o);
if($o ==true)
{
        ?>
        <script>
        
        alert ("ایجاد حساب با موفقیت انجام شد");

        location.replace("index.php")
        </script>
<?php
}
else
{
?>
<script>
    location.replace("index.php")
    alert ("ایجاد حساب با موفقیت انجام شد");

    
    </script>
<?php
}
?>

</div>

            <!-- ************************* -->
<?php
include("tf7.html");
?>