<?php
     include('sambungan.php');
	 $kodprogram = $_GET['kodprogram'];
	 $sql = "delete from program where kodprogram='$kodprogram'";
	 $result = mysqli_query($sambungan,$sql);
	 if ($result)
		 echo "<script>alert('Berjaya padam rekod')</script>";
	 else
		 echo "<script>alert('Tidak berjaya padam rekod')</script>";
	 echo "<script>window.location='program_senarai.php'</script>";
?>