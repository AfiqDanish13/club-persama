<?php
     include('sambungan.php');
	 $nokppeserta = $_GET['nokppeserta'];
	 $sql = "delete from peserta where nokppeserta='$nokppeserta'";
	 $result = mysqli_query($sambungan,$sql);
	 if ($result)
		 echo "<script>alert('Berjaya padam rekod')</script>";
	 else
		 echo "<script>alert('Tidak berjaya padam rekod')</script>";
	 echo "<script>window.location='peserta_senarai.php'</script>";
?>