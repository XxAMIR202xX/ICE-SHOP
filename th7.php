<?php
session_start();

?>
<html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ICE SHOP</title>
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="index.css">
</head>
<body>
    <header>

        
            

        <div id = "bala">
            <p>ICE SHOP</p>       
        </div>
    </header>
    <nav>
        <ul>
            <div id="div2">
                <li><a class="aok" href="index.php">خانه</a></li>
                <li><a class="aok" href="about.php">درباره ما</a></li>
                <li><a class="aok" href="about.php">تماس با ما</a></li>
                <li><a class="aok" href="about.php">سوالات متداول</a></li>
                <li><a class="aok" href="#p">دیدگاه ها</a></li>
                <li><a class="aok" href="mahsolat.php">محصولات</a></li>
                <li><a class="aok" href="login.php">ایجاد حساب کاربری</a></li>

<?php

if(isset($_SESSION["login"]))
{
?>
    <li><a class="aok" href="logout.php">خروج از حساب کاربری</a></li>
    
<?php
}

else
{
?>
    <li><a class="aok" href="login1.php">ورود به حساب کاربری</a></li>
<?php
}
?>

                

                <script src="bootstrap.js">


                </script>
            </div>
        </ul>
    </nav>


<main>