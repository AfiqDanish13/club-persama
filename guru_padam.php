<?php
     include('sambungan.php');
	 $nokpguru = $_GET['nokpguru'];
	 $sql = "delete from guru where nokpguru='$nokpguru'";
	 $result = mysqli_query($sambungan,$sql);
	 if ($result)
		 echo "<script>alert('Berjaya padam rekod')</script>";
	 else
		 echo "<script>alert('Tidak berjaya padam rekod')</script>";
	 echo "<script>window.location='guru_senarai.php'</script>";
?>