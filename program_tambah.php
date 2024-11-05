<?php 
include('sambungan.php');
if (isset($_POST['nokpguru'])){
    $nokpguru = $_POST['nokpguru'];
    $nokpmurid = $_POST['nokpmurid'];
    $namaprogram = $_POST['namaprogram'];
    $tarikhmula = $_POST['tarikhmula'];
    $tarikhtamat = $_POST['tarikhtamat'];
    $sql = "insert into program values(NULL, '$nokpguru', '$nokpmurid', '$namaprogram', 
        '$tarikhmula', '$tarikhtamat')";
	$result = mysqli_query($sambungan,$sql);
	if ($result)
		echo "<script>alert('Berjaya mendaftar program tahunan')</script>";
	else
		echo "<script>alert('Tidak berjaya mendaftar program tahunan')</script>";
	echo "<script>window.location = 'program_senarai.php'</script>"; }
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
                <li><a href="laman_guru.html">
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
                <li><a href="program_senarai.php" class="active">
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
                <li><a href="keputusan_senarai.php">
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
                <form action="program_tambah.php" method="post" class="program">
                    <h3>Maklumat Program Tahunan</h3>
                    <div class="row">
                        <div class="col-50">

                            <label>Nama Penyelaras</label>
                            <select type="text" name="nokpguru" required="">
                                <option selected value="" disabled selected>Pilih Nama Penyelaras<option>
                                    <?php
                                    $sql = "select * from guru";
                                    $data = mysqli_query($sambungan,$sql);
                                    while($guru = mysqli_fetch_array($data)){
                                        echo "<option value ='$guru[nokpguru]'>$guru[namaguru]</option>";}
                                    ?>
                            </select>
                            
                            <label>Nama Jawatankuasa Murid</label>
                            <select type="text" name="nokpmurid" required="">
                                <option selected value="" disabled selected>Pilih Nama Jawatankuasa Murid<option>
                                    <?php
                                    $sql = "select * from murid";
                                    $data = mysqli_query($sambungan,$sql);
                                    while($murid = mysqli_fetch_array($data)){
                                        echo "<option value ='$murid[nokpmurid]'>$murid[namamurid]</option>";}
                                    ?>
                            </select>

                            <label>Nama Program</label>
                            <input type="text" name="namaprogram" placeholder="Karnival Sains" required="">

                            <div class="row">
                                <div class="col-50">
                                    <label>Tarikh Mula</label>
                                    <input type="date" name="tarikhmula" required="">
                                </div>
                                <div class="col-50">
                                    <label>Tarikh Tamat</label>
                                    <input type="date" name="tarikhtamat" required="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <input class="save" type="submit" value="Daftar Program Tahunan">
                </form>
            </div>
            <div class="item2">
                <h3>Tindakan</h3>
                <ul>
                    <li><a href="program_senarai.php" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Senarai Program</span>
                    </a></li>
                    <li><a href="program_tambah.php" class="active" >
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span class="title">Daftar Program</span>
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