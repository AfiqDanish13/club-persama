<?php 
include('sambungan.php');
if (isset($_POST['nokppeserta'])){
    $nokppeserta = $_POST['nokppeserta'];
    $kodpertandingan = $_POST['kodpertandingan'];
    $namapeserta = $_POST['namapeserta'];
    $kelaspeserta = $_POST['kelaspeserta'];


    $sql = "insert into peserta
        values('$nokppeserta','$kodpertandingan', '$namapeserta', '$kelaspeserta')";
	$result = mysqli_query($sambungan,$sql);
	if ($result)
		echo "<script>alert('Berjaya mendaftar peserta baharu')</script>";
	else
		echo "<script>alert('Tidak berjaya mendaftar peserta murid')</script>";
	echo "<script>window.location = 'peserta_senarai.php'</script>"; }
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
                <li><a href="program_senarai.php">
                    <span class="icon"><i class="fas fa-book"></i></span>
                    <span class="title">Program</span>
                </a></li>
                <li><a href="pertandingan_senarai.php">
                    <span class="icon"><i class="fas fa-flag"></i></span>
                    <span class="title">Pertandingan</span>
                </a></li>
                <li><a href="peserta_senarai.php" class="active">
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
                <form action="peserta_tambah.php" method="post" enctype="multipart/form-data" class="murid">
                    <h3>Maklumat Peserta</h3>
                    <div class="row">
                        <div class="col-50">

                            <label>Nama Peserta</label>
                            <input type="text" name="namapeserta" placeholder="name" required="">
                            
                            <div class="row">
                                <div class="col-50">
                                    <label>No Kad Pengenalan</label>
                                    <input type="text" name="nokppeserta" maxlength="12" minlength="12" placeholder="900101120001" required="">
                                </div>
                                <div class="col-50">
                                    <label>Tingkatan</label>
                                    <select type="text" name="kelaspeserta" required="">
                                        <option selected value="" disabled selected>Pilih Kelas Anda</option>
                                        <option>5 Sains Teknologi</option>
                                        <option>5 Sains Tulen</option>
                                        <option>5 Sains Perakaunan</option>
                                        <option>5 Sains Reka Cipta</option>
                                        <option>5 Sains Sukan</option>
                                        <option>5 Sains Sosial</option>
                                    </select>
                                </div>
                                
                            </div>
                            <label>Nama Pertandingan</label>
                            <select type="text" name="kodpertandingan" required="">
                                <option selected value="" disabled selected>Pilih Pertandingan<option>
                                    <?php
                                    $sql = "select * from pertandingan";
                                    $data = mysqli_query($sambungan,$sql);
                                    while($pertandingan = mysqli_fetch_array($data)){
                                        echo "<option value ='$pertandingan[kodpertandingan]'>$pertandingan[namapertandingan]</option>";}
                                    ?>
                            </select>
                        </div>
                    </div>
                    <input class="save" type="submit" value="Daftar Peserta">
                </form>
            </div>
            <div class="item2">
                <h3>Tindakan</h3>
                <ul>
                    <li><a href="peserta_senarai.php" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Senarai Peserta</span>
                    </a></li>
                    <li><a href="peserta_tambah.php" class="active">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span class="title">Daftar Peserta</span>
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