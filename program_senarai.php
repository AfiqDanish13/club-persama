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
            <div class="item" style="overflow-y:auto;">
                <h3>Senarai Program Tahunan</h3>
                <table>
                    <tr>
                        <th width="4%">Bil</th>
                        <th width="18%">Nama Program</th>
                        <th width="18%">Penyelaras</th>
                        <th width="26%">Jawatankuasa Murid</th>
                        <th width="18%">Tarikh</th>
                        <th width="9%">Bil Hari</th>
                        <th width="8%">Tindakan</th>
                    </tr>	
                    
                    <?php
                    $bil = 1;
                    $sql = "select * from program 
                        join guru on program.nokpguru = guru.nokpguru 
                        join murid on program.nokpmurid = murid.nokpmurid
                        ORDER BY tarikhmula ASC";
                    $data = mysqli_query($sambungan, $sql);
                    while($program = mysqli_fetch_array($data)){
                        $tarikhmula = date_create($program['tarikhmula']);
                        $tarikhtamat = date_create($program['tarikhtamat']);
                        $beza = date_diff($tarikhmula, $tarikhtamat);
                        $bilHari = $beza->format("%a");
                    ?>

                    <tr>
                        <td><?php echo $bil; ?>.</td>
                        <td><?php echo $program['namaprogram']; ?></td>
                        <td><?php echo $program['namaguru']; ?></td>
                        <td><?php echo $program['namamurid']; ?></td>
                        <td><?php echo date ("d/m/y", strtotime($program['tarikhmula'])); ?> - <?php echo date ("d/m/y", strtotime($program['tarikhtamat'])); ?></td>
                        <td><?php echo $beza->format("%a"); ?> Hari</td>
                        <td><a href="program_padam.php?kodprogram=<?php echo $program['kodprogram'];?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>

                    <?php $bil = $bil + 1; } ?>	

                </table>
            </div>
            <div class="item2">
                <h3>Tindakan</h3>
                <ul>
                    <li><a href="program_senarai.php" class="active" id="first">
                        <span class="icon"><i class="fas fa-list"></i></span>
                        <span class="title">Senarai Program</span>
                    </a></li>
                    <li><a href="program_tambah.php">
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