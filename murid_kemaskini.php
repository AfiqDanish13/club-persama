<?php 
include('sambungan.php');
if (isset($_POST['nokpmurid'])){
    $nokpmurid = $_POST['nokpmurid'];
    $namamurid = $_POST['namamurid'];
    $kelasmurid = $_POST['kelasmurid'];
    $jawatanmurid = $_POST['jawatanmurid'];

    
    $sql = "update murid set namamurid='$namamurid', kelasmurid='$kelasmurid', jawatanmurid='$jawatanmurid', where nokpmurid='$nokpmurid'";
    
    $result = mysqli_query($sambungan,$sql);
	if ($result)
		echo "<script>alert('Berjaya kemaskini maklumat')</script>";
	else
		echo "<script>alert('Tidak berjaya kemaskini maklumat')</script>";
    echo "<script>window.location = 'murid_senarai.php'</script>"; }
    
$nokpmurid = $_GET['nokpmurid'];
$sql = "select * from murid where nokpmurid = '$nokpmurid'";
$result = mysqli_query($sambungan,$sql);
while ($murid = mysqli_fetch_array($result)){
    $namamurid = $murid['namamurid'];
    $kelasmurid = $murid['kelasmurid'];
    $jawatanmurid = $murid['jawatanmurid'];
}
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
                <form action="murid_kemaskini.php" method="post" class="murid">
                    <h3>Maklumat Jawatankuasa Murid</h3>
                    <div class="row">
                        <div class="col-50">

                            <label>Nama Guru Penasihat</label>
                            <input type="text" name="namamurid" value="<?php echo $namamurid; ?>" required="">
                            
                            <div class="row">
                                <div class="col-50">

                                    <label>No Kad Pengenalan</label>
                                    <input type="text" class="readonly" readonly type="int" name="nokpmurid" maxlength="12" minlength="12" value="<?php echo $nokpmurid; ?>" required="">
                                
                                </div>
                                <div class="col-50">
                                    <label>Tingkatan</label>
                                    <select type="text" name="kelasmurid" required="">
                                        <option><?php echo $kelasmurid; ?></option>
                                        <option>5 Sains Teknologi</option>
                                        <option>5 Sains Tulen</option>
                                        <option>5 Sains Perakaunan</option>
                                        <option>5 Sains Reka Cipta</option>
                                        <option>5 Sains Sukan</option>
                                        <option>5 Sains Sosial</option>
                                    </select>
                                </div>
                            </div>

                            <label>Jawatan Murid</label>
                            <select type="text" name="jawatanmurid" required="">
                                <option> <?php echo $jawatanmurid; ?></option>
                                <option>Pengerusi Persama</option>
                                <option>Timbalan Pengerusi Persama</option>
                                <option>Setiausaha Persama</option>
                                <option>Bendahari Persama</option>
                                <option>AJK Multimedia dan Penyiaran</option>
                                <option>AJK Persediaan dan Tempat</option>
                                <option>AJK Disiplin dan Protokol</option>
                            </select>

                        </div>
                    </div>
                    <input class="update" type="submit" value="Kemaskini Maklumat">
                </form>
            </div>
            <div class="item2">
                <h3>Tindakan</h3>
                <ul>
                    <li><a href="murid_senarai.php" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Senarai AJK</span>
                    </a></li>
                    <li><a href="murid_tambah.php">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span class="title">Daftar AJK</span>
                    </a></li>
                    <li><a href="ahli_senarai.php" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Senarai Ahli</span>
                    </a></li>
                    <li><a href="ahli_tambah.php" >
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