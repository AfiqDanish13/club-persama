<?php
     include('sambungan.php');
	 $kodpertandingan = $_GET['kodpertandingan'];
	 $sql = "delete from pertandingan where kodpertandingan='$kodpertandingan'";
	 $result = mysqli_query($sambungan,$sql);
	 if ($result)
		 echo "<script>alert('Berjaya padam rekod')</script>";
	 else
		 echo "<script>alert('Tidak berjaya padam rekod')</script>";
	 echo "<script>window.location='pertandingan_senarai.php'</script>";
?>