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


 <a href="add.mahsol.php"><div class="col-12" style="margin: 10px ;" style="list-style: none;"> <button>افزودن محصول</button> </div></a>







<div class="col-2 xp">

<div class="col-12 cp80 bg-light xp"></div>



<div class="col-12 shop bg-light xp"> پک 80 cp</div>


<span> 
<div class="col-12 shop xp"> <button> افزودن به سبد خرید </button>
<a href="d.mahsol.php?id=<?php echo($row["id"]); ?>"><button>حذف</button> </a> 
<a href="e.e.mahsol.php?id=<?php echo($row["id"]); ?>"><button> ویرایش</button> </a></div>
</span> 
    <?php
$row=mysqli_fetch_array($result);
    ?>



</div>



<!-- ************************* -->

<div class="col-2 xp">

<div class="col-12 cp160 xp"> </div>



<div class="col-12 shop bg-light xp">پک 160 cp</div>


<span> 
<div class="col-12 shop xp"> <button> افزودن به سبد خرید </button>
<a href="d.mahsol.php?id=<?php echo($row["id"]); ?>"><button>حذف</button> </a> 
<a href="e.e.mahsol.php?id=<?php echo($row["id"]); ?>"><button> ویرایش</button> </a></div>
</span> 
    <?php
$row=mysqli_fetch_array($result);
    ?>



</div>


<!-- ************************* -->

<div class="col-2">

<div class="col-12 cp240"> </div>



<div class="col-12 shop bg-light "> پک 240 cp</div>


<span> 
<div class="col-12 shop xp"> <button> افزودن به سبد خرید </button>
<a href="d.mahsol.php?id=<?php echo($row["id"]); ?>"><button>حذف</button> </a> 
<a href="e.e.mahsol.php?id=<?php echo($row["id"]); ?>"><button> ویرایش</button> </a></div>
</span> 
    <?php
$row=mysqli_fetch_array($result);
    ?>


</div>






<!-- ************************* -->

<div class="col-2 ">

<div class="col-12 cp320"> </div>



<div class="col-12 shop bg-light "> پک 320 cp</div>

<span> 
<div class="col-12 shop xp"> <button> افزودن به سبد خرید </button>
<a href="d.mahsol.php?id=<?php echo($row["id"]); ?>"><button>حذف</button> </a> 
<a href="e.e.mahsol.php?id=<?php echo($row["id"]); ?>"><button> ویرایش</button> </a></div>
</span> 
    <?php
$row=mysqli_fetch_array($result);
    ?>


</div>

    










<?php

while ($row) {?>
    <div class="col-2">
    <div class="col-12 cp320"> </div>
<span> 
<div class="col-12 shop bg-light "><?php echo($row["aname"]); ?></div>

<div class="col-12 shop xp"> <button> افزودن به سبد خرید </button>
<a href="d.mahsol.php?id=<?php echo($row["id"]); ?>"><button>حذف</button> </a> 
<a href="e.e.mahsol.php?id=<?php echo($row["id"]); ?>"><button> ویرایش</button> </a></div>

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