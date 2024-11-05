<?php 
include('sambungan.php');
if (isset($_POST['nokpmurid'])){
    $nokpmurid = $_POST['nokpmurid'];
    $namamurid = $_POST['namamurid'];
    $kelasmurid = $_POST['kelasmurid'];
    $jawatanmurid = $_POST['jawatanmurid'];
    $yuran = $_POST['yuran'];

    $sql = "insert into murid values('$nokpmurid','$namamurid', '$kelasmurid', '$jawatanmurid',NULL,'$yuran')";
	$result = mysqli_query($sambungan,$sql);
	if ($result)
		echo "<script>alert('Berjaya mendaftar ahli baharu')</script>";
	else
		echo "<script>alert('Tidak berjaya mendaftar ahli baharu')</script>";
	echo "<script>window.location = 'ahli_senarai.php'</script>"; }
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
                <li><a href="murid_senarai.php" class="active">
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
                <form action="ahli_tambah.php" method="post" enctype="multipart/form-data" class="murid">
                    <h3>Maklumat Pendaftaran Ahli Baharu</h3>
                    <div class="row">
                        <div class="col-50">

                            <label>Nama Murid</label>
                            <input type="text" name="namamurid" placeholder="name" required="">
                            
                            <div class="row">
                                <div class="col-50">
                                    <label>No Kad Pengenalan</label>
                                    <input type="text" name="nokpmurid" maxlength="12" minlength="12" placeholder="900101120001" required="">
                                </div>
                                <div class="col-50">
                                    <label>Tingkatan</label>
                                    <select type="text" name="kelasmurid" required="">
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

                            <div class="row">
                                <div class="col-50">
                                <label>Jawatan Murid</label>
                                <input class="readonly" readonly type="text" name="jawatanmurid"  value="Ahli Biasa" >
                                </div>
                                <div class="col-50">
                                    <label>Yuran</label>
                                    <input class="readonly" readonly type="text" name="yuran"  value="10.00" >
                                </div>
                            </div>


                        </div>
                    </div>
                    <input class="save" type="submit" value="Daftar Murid">
                </form>
            </div>
            <div class="item2">
                <h3>Tindakan</h3>
                <ul>
                    <li><a href="murid_senarai.php" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Senarai AJK</span>
                    </a></li>
                    <li><a href="murid_tambah.php" >
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span class="title">Daftar AJK</span>
                    </a></li>
                    <li><a href="ahli_senarai.php" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Senarai Ahli</span>
                    </a></li>
                    <li><a href="ahli_tambah.php" class="active">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span class="title">Daftar Ahli Baharu</span>
                    </a></li>
                    <li><a href="yuran_cetak.php" target="_blank" id="first">
                        <span class="icon"><i class="fas fa-money-bill-wave"></i></span>
                        <span class="title">Jumlah Kutipan Yuran</span>
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