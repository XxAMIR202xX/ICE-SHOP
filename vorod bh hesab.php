<?php
include("th7.html");
?>
            <!-- ************************* -->
            <?php
$fname = $_POST["fname"];


$lname = $_POST["lname"];

$email = $_POST["email"];

$pass = $_POST["pass"];

$repass = $_POST["repass"];


if ($pass != $repass)
 echo("ramz obor ba tekrar an barabar nist  -_* ");
else{
echo("<p>".$fname."</p>");
echo("<p>".$lname."</p>");
echo("<p>".$email."</p>");
echo("<p>".$pass."</p>");
echo("<p>".$repass."</p>");
}





?> 
            <!-- ************************* -->
<?php
include("tf7.html");
?>