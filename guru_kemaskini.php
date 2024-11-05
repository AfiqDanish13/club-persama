<?php 
include('sambungan.php');
if (isset($_POST['nokpguru'])){
    $nokpguru = $_POST['nokpguru'];
    $namaguru = $_POST['namaguru'];
    $jawatanguru = $_POST['jawatanguru'];

    
    $passwordguru = $_POST['passwordguru'];
    $sql = "UPDATE `guru` SET `namaguru` = '$namaguru', `jawatanguru` = '$jawatanguru', `passwordguru` = '$passwordguru' WHERE `guru`.`nokpguru` = '$nokpguru'";
	$result = mysqli_query($sambungan,$sql);
	if ($result)
		echo "<script>alert('Berjaya kemaskini maklumat')</script>";
	else
		echo "<script>alert('Tidak berjaya kemaskini maklumat')</script>";
    echo "<script>window.location = 'guru_senarai.php'</script>"; }
    
$nokpguru = $_GET['nokpguru'];
$sql = "select * from guru where nokpguru = '$nokpguru'";
$result = mysqli_query($sambungan,$sql);
while ($guru = mysqli_fetch_array($result)){
    $namaguru = $guru['namaguru'];
    $jawatanguru = $guru['jawatanguru'];
	$passwordguru = $guru['passwordguru'];
    $gambarguru = "<img src='pictures/".$guru['gambarguru']."' width='100px' height='100px'/>"; }
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
                <li><a href="guru_senarai.php" class="active">
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
                <form action="guru_kemaskini.php" method="post" enctype="multipart/form-data" class="guru">
                    <h3>Maklumat Guru Penasihat</h3>
                    <div class="row">
                        <div class="col-50">

                            <label>Nama Guru Penasihat</label>
                            <input type="text" name="namaguru" value="<?php echo $namaguru; ?>" required="">
                            
                            <div class="row">
                                <div class="col-50">
                                    <label>No Kad Pengenalan</label>
                                    <input type="text" class="readonly" readonly type="int" name="nokpguru" maxlength="12" minlength="12" value="<?php echo $nokpguru; ?>"required="">
                                </div>
                                <div class="col-50">
                                    <label>Kata Laluan Akaun</label>
                                    <input type="password" id="Password" name="passwordguru" minlength="5" value="<?php echo $passwordguru; ?>" required="">
                                </div>
                            </div>

                            <label>Jawatan Guru</label>
                            <select type="text" name="jawatanguru" required="">
                                <option> <?php echo $jawatanguru; ?></option>
                                <option>Ketua Guru Penasihat</option>
                                <option>Penolong Guru Penasihat</option>
                                <option>Setiausaha Guru Penasihat</option>
                                <option>Bendahari Guru Penasihat</option>
                                <option>Panitia Biologi</option>
                                <option>Panitia Fizik</option>
                                <option>Panitia Kimia</option>
                                <option>Panitia Sains</option>
                                <option>Panitia Sains Sukan</option>
                                <option>Panitia Sains Tambahan</option>
                                <option>Panitia Matematik Moden</option>
                                <option>Panitia Matematik Tambahan</option>
                            </select>
                            
                        </div>
                    </div>
                    <div><input type="checkbox" onclick="myFunction()">  Tunjukkan Kata Laluan</div>
                    <input class="update" type="submit" value="Kemaskini Maklumat">
                </form>
            </div>
            <div class="item2">
                <h3>Tindakan</h3>
                <ul>
                    <li><a href="guru_senarai.php" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Senarai Guru</span>
                    </a></li>
                    <li><a href="guru_tambah.php">
                        <span class="icon"><i class="fas fa-plus"></i></span>
                        <span class="title">Daftar Guru</span>
                    </a></li>
                    <li><a href="Manual Sistem PERSAMA.pdf" download>
                        <span class="icon"><i class="fas fa-download"></i></span>
                        <span class="title">Manual Pengguna</span>
                    </a></li>
                </ul>
            </div>
        </div>

        <div class="copyright">
            &copy; Hak Cipta Terpelihara 2020 - Sistem Pengurusan Aktiviti Persatuan Sains Matematik SMK Kuhara Tawau
        </div>

    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("Password");
            if (x.type === "password") {
                x.type = "text"; 
            }
            else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>