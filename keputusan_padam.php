<?php
     include('sambungan.php');
	 $kodkeputusan = $_GET['kodkeputusan'];
	 $sql = "delete from keputusan where kodkeputusan='$kodkeputusan'";
	 $result = mysqli_query($sambungan,$sql);
	 if ($result)
		 echo "<script>alert('Berjaya padam rekod')</script>";
	 else
		 echo "<script>alert('Tidak berjaya padam rekod')</script>";
	 echo "<script>window.location='keputusan_senarai.php'</script>";
?>