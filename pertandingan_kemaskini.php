<?php 
include('sambungan.php');
if (isset($_POST['kodpertandingan'])){
    $kodpertandingan = $_POST['kodpertandingan'];
    $kodprogram = $_POST['kodprogram'];
    $namapertandingan = $_POST['namapertandingan'];
    $tarikhpertandingan = $_POST['tarikhpertandingan'];

    $sql = "UPDATE `pertandingan` SET `namapertandingan` = '$namapertandingan', `tarikhpertandingan` = '$tarikhpertandingan' WHERE `pertandingan`.`kodpertandingan` = '$kodpertandingan'";
	
	$result = mysqli_query($sambungan,$sql);
	if ($result)
		echo "<script>alert('Berjaya kemaskini maklumat')</script>";
	else
		echo "<script>alert('Tidak berjaya kemaskini maklumat')</script>";
	echo "<script>window.location = 'pertandingan_senarai.php'</script>"; }

$kodpertandingan = $_GET['kodpertandingan'];
$sql = "select * from pertandingan where kodpertandingan = '$kodpertandingan'";
$result = mysqli_query($sambungan,$sql);
while ($pertandingan = mysqli_fetch_array($result)){
    $kodprogram = $pertandingan['kodprogram'];
    $namapertandingan = $pertandingan['namapertandingan'];
    $tarikhpertandingan = $pertandingan['tarikhpertandingan'];
    $gambarpertandingan = "<img src='pictures/".$pertandingan['gambarpertandingan']."' width='100px' height='100px'/>"; }
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
                <li><a href="pertandingan_senarai.php" class="active">
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
                <form action="pertandingan_kemaskini.php" method="post" class="pertandingan">
                    <h3>Maklumat Pertandingan</h3>
                    <div class="row">
                        <div class="col-50">
                            <label>Kod Pertandingan</label>
                            <input type="text" name="kodpertandingan" class="readonly" readonly type="int" value="<?php echo $kodpertandingan; ?>"required="">
                            
                            
                            <label>Nama Program</label>
                            <input type="text" name="kodprogram" class="readonly" readonly type="int" value="<?php echo $kodprogram; ?>"required="">
                            
                            <label>Nama Pertandingan</label>
                            <input type="text" name="namapertandingan" value="<?php echo $namapertandingan; ?>" required="">
                            
                            <label>Tarikh Pertandingan</label>
                            <input type="date" name="tarikhpertandingan" value="<?php echo $tarikhpertandingan; ?>" required="">
                            
                        </div>
                    </div>
                    <input class="save" type="submit" value="Kemaskini">
                </form>
            </div>
            <div class="item2">
                <h3>Tindakan</h3>
                <ul>
                    <li><a href="pertandingan_senarai.php" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Senarai Pertandingan</span>
                    </a></li>
                    <li><a href="pertandingan_tambah.php">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span class="title">Daftar Pertandingan</span>
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