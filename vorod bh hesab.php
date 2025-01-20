

<?php
include("th7.html");
?>
            <!-- ************************* -->
            
            <div class="container">

            <?php

            
$fname = $_POST["fname"];


$lname = $_POST["lname"];

$email = $_POST["email"];

$pass = $_POST["pass"];

$repass = $_POST["repass"];

$telefon = $_POST["telefon"];


if ($pass != $repass)
 echo("ramz obor ba tekrar an barabar nist  -_* ");
else{
echo("<p> your name :    ".$fname."</p>");
echo("<p> your family name :        ".$lname."</p>");
echo("<p> your email :      ".$email."</p>");
echo("<p> your pass :       ".$pass."</p>");
echo("<p> your phone number :       ".$telefon."</p>");
}





?> 

</di>

            <!-- ************************* -->
<?php
include("tf7.html");
?>