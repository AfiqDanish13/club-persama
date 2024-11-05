<?php
     include('sambungan.php');
	 $nokpmurid = $_GET['nokpmurid'];
	 $sql = "delete from murid where nokpmurid='$nokpmurid'";
	 $result = mysqli_query($sambungan,$sql);
	 if ($result)
		 echo "<script>alert('Berjaya padam rekod')</script>";
	 else
		 echo "<script>alert('Tidak berjaya padam rekod')</script>";
	 echo "<script>window.location='ahli_senarai.php'</script>";
?>