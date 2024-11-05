<?php 
include('sambungan.php');
if (isset($_POST['nokpguru'])){
    $nokpguru = $_POST['nokpguru'];
    $namaguru = $_POST['namaguru'];
    $jawatanguru = $_POST['jawatanguru'];

    $filename = $_FILES['uploadfile']['name'];
    $filetmpname = $_FILES['uploadfile']['tmp_name'];
    $folder = 'pictures/';
    move_uploaded_file($filetmpname, $folder.$filename);
    
    $passwordguru = $_POST['passwordguru'];

    $sql = "insert into guru values('$nokpguru','$namaguru', '$jawatanguru','$filename','$passwordguru')";
	$result = mysqli_query($sambungan,$sql);
	if ($result)
		echo "<script>alert('Berjaya mendaftar guru penasihat baharu')</script>";
	else
		echo "<script>alert('Tidak berjaya mendaftar guru penasihat')</script>";
	echo "<script>window.location = 'guru_senarai.php'</script>"; }
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
                <form action="guru_tambah.php" method="post" enctype="multipart/form-data" class="guru">

                    <h3>Maklumat Guru Penasihat</h3>
                    <div class="row">
                        <div class="col-50">

                            <label>Nama Guru Penasihat</label>
                            <input type="text" name="namaguru" placeholder="name" required="">
                            
                            <div class="row">
                                <div class="col-50">
                                    <label>No Kad Pengenalan</label>
                                    <input type="text" name="nokpguru" maxlength="12" minlength="12" placeholder="900101120001" required="">
                                </div>
                                <div class="col-50">
                                    <label>Kata Laluan Akaun</label>
                                    <input type="password" id="Password" name="passwordguru" minlength="5" placeholder="*****" required="">
                                </div>
                            </div>

                            <label>Jawatan Guru</label>
                            <select type="text" name="jawatanguru" required="">
                                <option selected value="" disabled selected>Pilih Jawatan Anda</option>
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

                            <label>Gambar</label>
                            <input type="file" name="uploadfile"/>

                        </div>
                    </div>
                    <div><input type="checkbox" onclick="myFunction()">  Tunjukkan Kata Laluan</div>
                    <input class="save" type="submit" value="Daftar Guru Penasihat">
                </form>
            </div>
            <div class="item2">
                <h3>Tindakan</h3>
                <ul>
                    <li><a href="guru_senarai.php" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Senarai Guru</span>
                    </a></li>
                    <li><a href="guru_tambah.php" class="active">
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