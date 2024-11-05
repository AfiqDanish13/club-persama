<?php 
include('sambungan.php');
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
            <div class="item" style="overflow-y:auto;">
                <h3>Keputusan Pertandingan</h3>
                <table>

                    <tr>
                        <th width="5%">Bil</th>
                        <th width="17%">Nama Program</th>
                        <th width="23%">Nama Pertandingan</th>
                        <th width="15.5%">Johan</th>
                        <th width="15.5%">Naib Johan</th>
                        <th width="15.5%">Ketiga</th>
                        <th colspan="2" width="8.5%">Tindakan</th>
                    </tr>	
                    
                    <?php
                    $bil = 1;
                    $sql = "select * from keputusan 
                    join pertandingan on keputusan.kodpertandingan = pertandingan.kodpertandingan
                    join program on pertandingan.kodprogram = program.kodprogram
                    join peserta on keputusan.nokppeserta1 = peserta.nokppeserta";
                    $data = mysqli_query($sambungan, $sql);
                    while($keputusan = mysqli_fetch_array($data)){
                    ?>

                    <tr>
                        <td><?php echo $bil; ?>.</td>
                        <td><?php echo $keputusan['namaprogram']; ?></td>
                        <td><?php echo $keputusan['namapertandingan']; ?></td>
                        <td><?php echo $keputusan['nokppeserta1']; ?></td>
                        <td><?php echo $keputusan['nokppeserta2']; ?></td>
                        <td><?php echo $keputusan['nokppeserta3']; ?></td>
                        <td><a href="keputusan_cetak.php?kodkeputusan=<?php echo $keputusan['kodkeputusan'];?>" target="_blank"><i class="fas fa-print"></i></a></td>
                        <td><a href="keputusan_padam.php?kodkeputusan=<?php echo $keputusan['kodkeputusan'];?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>

                    <?php $bil = $bil + 1; } ?>	

                </table>
            </div>
            <div class="item2">
                <h3>Tindakan</h3>
                <ul>
                    <li><a href="keputusan_senarai.php" class="active" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Keputusan Pertandingan</span>
                    </a></li>
                    <li><a href="keputusan_tambah.php">
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