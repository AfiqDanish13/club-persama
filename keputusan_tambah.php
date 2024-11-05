<?php 
include('sambungan.php');
if (isset($_POST['kodpertandingan'])){
    $kodpertandingan = $_POST['kodpertandingan'];
    $nokppeserta1 = $_POST['nokppeserta1'];
    $nokppeserta2 = $_POST['nokppeserta2'];
    $nokppeserta3 = $_POST['nokppeserta3'];
    $sql = "insert into keputusan values(NULL, '$kodpertandingan', '$nokppeserta1', '$nokppeserta2', '$nokppeserta3')";
	$result = mysqli_query($sambungan,$sql);
	if ($result)
		echo "<script>alert('Berjaya mendaftar keputusan pertandingan')</script>";
	else
		echo "<script>alert('Tidak berjaya mendaftar keputusan pertandingan')</script>";
	echo "<script>window.location = 'keputusan_senarai.php'</script>"; }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Persama  |  2020</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="light.css">
</head>
<body>
    <div class="wrapper">

        <div class="top_nav">
            <div class="main_menu">
            <img src="persama.png">
            </div>

            <div class="top_menu">
                <div class="title">SISTEM PENGURUSAN AKTIVITI PERSATUAN SAINS MATEMATIK SMK KUHARA TAWAU</div>
            </div>
        </div>

        <div class="sidebar">
            <ul>
                <li><a href="laman_guru.html" >
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="title">Menu Utama</span>
                </a></li>
                <li><a href="guru_senarai.php">
                    <span class="icon"><i class="fas fa-user"></i></span>
                    <span class="title">Guru Penasihat</span>
                </a></li>
                <li><a href="murid_senarai.php">
                    <span class="icon"><i class="fas fa-users"></i></span>
                    <span class="title">Jawatankuasa</span>
                </a></li>
                <li><a href="program_senarai.php">
                    <span class="icon"><i class="fas fa-book"></i></span>
                    <span class="title">Program</span>
                </a></li>
                <li><a href="pertandingan_senarai.php">
                    <span class="icon"><i class="fas fa-flag"></i></span>
                    <span class="title">Pertandingan</span>
                </a></li>
                <li><a href="peserta_senarai.php">
                    <span class="icon"><i class="fas fa-users"></i></span>
                    <span class="title">Peserta</span>
                </a></li>
                <li><a href="keputusan_senarai.php" class="active">
                    <span class="icon"><i class="fas fa-medal"></i></span>
                    <span class="title">Keputusan</span>
                </a></li>
                <li><a href="laman_pelajar.html">
                    <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                    <span class="title">Log Keluar</span>
                </a></li>
            </ul> 
        </div>

        <div class="main_container">
            <div class="item">
                <form action="keputusan_tambah.php" method="post" class="keputusan">
                    <h3>Keputusan Pertandingan</h3>
                    <div class="row">
                        <div class="col-50">

                            <label>Nama Pertandingan</label>
                            <select type="text" name="kodpertandingan" required="">
                                <option selected value="" disabled selected>Pilih Nama Pertandingan<option>
                                    <?php
                                    $sql = "select * from pertandingan";
                                    $data = mysqli_query($sambungan,$sql);
                                    while($pertandingan = mysqli_fetch_array($data)){
                                        echo "<option value ='$pertandingan[kodpertandingan]'>$pertandingan[namapertandingan]</option>";}
                                    ?>
                            </select>
                            
                            <label>Nama Pemenang (Johan)</label>
                            <select type="text" name="nokppeserta1" required="">
                                <option selected value="" disabled selected>Pilih Nama Peserta<option>
                                    <?php
                                    $sql = "select * from peserta";
                                    $data = mysqli_query($sambungan,$sql);
                                    while($peserta = mysqli_fetch_array($data)){
                                        echo "<option value ='$peserta[nokppeserta]'>$peserta[namapeserta]</option>";}
                                    ?>
                            </select>

                            <label>Nama Pemenang (Naib Johan)</label>
                            <select type="text" name="nokppeserta2" required="">
                                <option selected value="" disabled selected>Pilih Nama Peserta<option>
                                    <?php
                                    $sql = "select * from peserta";
                                    $data = mysqli_query($sambungan,$sql);
                                    while($peserta = mysqli_fetch_array($data)){
                                        echo "<option value ='$peserta[nokppeserta]'>$peserta[namapeserta]</option>";}
                                    ?>
                            </select>

                            <label>Nama Pemenang (Ketiga)</label>
                            <select type="text" name="nokppeserta3" required="">
                                <option selected value="" disabled selected>Pilih Nama Peserta<option>
                                    <?php
                                    $sql = "select * from peserta";
                                    $data = mysqli_query($sambungan,$sql);
                                    while($peserta = mysqli_fetch_array($data)){
                                        echo "<option value ='$peserta[nokppeserta]'>$peserta[namapeserta]</option>";}
                                    ?>
                            </select>

                        </div>
                    </div>
                    <input class="save" type="submit" value="Daftar Keputusan Pertandingan">
                </form>
            </div>
            <div class="item2">
                <h3>Tindakan</h3>
                <ul>
                    <li><a href="keputusan_senarai.php" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Keputusan Pertandingan</span>
                    </a></li>
                    <li><a href="keputusan_tambah.php" class="active">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span class="title">Daftar Keputusan</span>
                    </a></li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            &copy; Hak Cipta Terpelihara 2020 - Sistem Pengurusan Aktiviti Persatuan Sains Matematik SMK Kuhara Tawau
        </div>

    </div>
</body>
</html>