<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Customer Homepage</title>

    <?php include '../../includes/cusTopNaviBar.php';


        $Role = $_SESSION['role'];
    ?>

</head>

<body>
<?php
//Customer Mainpage Interface
if ($Role==1){
?>
<h2><center>RRMS One Stop Centre - Food Delivery and Goods Delivery!!</center></h2>

<br><br><br><br>

<center><table border="1" cellspacing="0" cellpadding="0"> 
	<thead>
		<tr>
            <th><a href="/RRMS/ApplicationLayer/ManageFoodView/cusFoodHome.php"><img src="../../includes/ExternalImage/food.png" alt="viewprogram" style="width:500px;height:250;"></a></p></th>
            <th><a href="/RRMS/ApplicationLayer/ManageGoodsView/custGoodsDelivery.php"><img src="../../includes/ExternalImage/goods.png" alt="viewprogram" style="width:500px;height:250;"></a></p></th>
		</tr>

        
        
        
	</thead>
	</table></center>

<?php
}
?>
 </body>






  

	

</div>

</html>
