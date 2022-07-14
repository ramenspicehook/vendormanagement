<?php
		$ID = $_GET["id"];
		$con=mysqli_connect("localhost","root","","spicehook_project");
		$sel="select * from product where id=$ID";
		$qry=mysqli_query($con,$sel);
		while($row=mysqli_fetch_array($qry))
		{
			$del = "delete from product where id=$ID";
			$que = mysqli_query($con, $del);
			if($que>0)
			{
		    	header("location:listing_products.php");
		    }
		}	
?>