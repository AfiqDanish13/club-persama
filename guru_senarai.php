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
            <div class="item" style="overflow-y:auto;">
                <h3>Senarai Guru Penasihat</h3>
                <table>

                    <tr>
                        <th width="5%">Bil</th>
                        <th width="20%">Nama Guru</th>
                        <th width="17%">No Kad Pengenalan</th>
                        <th width="25%">Jawatan</th>
                        <th width="20%">Gambar</th>
                        <th colspan="2" width="13%">Tindakan</th>
                    </tr>

                    <?php
                    $bil = 1;
                    $sql = "select * from guru";
                    $data = mysqli_query($sambungan, $sql);
                    while($guru = mysqli_fetch_array($data)){
                    ?>	

                    <tr>
                        <td><?php echo $bil; ?>.</td>
                        <td><?php echo $guru['namaguru']; ?></td>
                        <td><?php echo $guru['nokpguru']; ?></td>
                        <td><?php echo $guru['jawatanguru']; ?></td>
                        <td><?php echo "<img src='pictures/".$guru['gambarguru']."' width='150px' height='150px'/>"; ?></td>
                        <td><a href="guru_kemaskini.php?nokpguru=<?php echo $guru['nokpguru'];?>"><i class="fas fa-edit"></i></a></td>
                        <td><a href="guru_padam.php?nokpguru=<?php echo $guru['nokpguru'];?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>

                    <?php $bil = $bil + 1; } ?>	

                </table>
            </div>
            <div class="item2">
                <h3>Tindakan</h3>
                <ul>
                    <li><a href="guru_senarai.php" class="active" id="first">
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
</body>
</html>