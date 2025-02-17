<?php
include("th7.php");
$connect = mysqli_connect("localhost","root","","ice-shop");
$result = mysqli_query($connect,"SELECT * FROM `mahsol`");
mysqli_close($connect);
$row=mysqli_fetch_array($result);
?>
            <!-- ************************* -->

            <div class="container">

<div  class="row ">


 <a href="add.mahsol.php"><div class="col-12"> <button>افزودن محصول</button> </div></a>


<?php

while ($row) {?>
    <div class="col-2" style="margin-left: 10px; margin-top: 45px;">
    <div class="col-12 cp111" > </div>
<span> 
<div class="col-12 shop bg-light "><?php echo($row["aname"]); ?></div>

<div class="col-12 shop xp"> <button> افزودن به سبد خرید </button>
<div style="margin-bottom: 100px;"><a href="d.mahsol.php?id=<?php echo($row["id"]); ?>"><button>حذف</button> </a> 
<a href="e.e.mahsol.php?id=<?php echo($row["id"]); ?>"><button> ویرایش</button> </a> </div>
</div>

</span> 

    <?php

$row=mysqli_fetch_array($result);?>

</div>
<?php
    }

    ?>







</div>



</div>
            <!-- ************************* -->
<?php
include("tf7.html");
?>