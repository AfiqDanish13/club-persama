<?php
    include('sambungan.php');
    $kodkeputusan = $_GET['kodkeputusan'];
    
    $sql = "select * from keputusan join pertandingan on keputusan.kodpertandingan = pertandingan.kodpertandingan 
        join program on pertandingan.kodprogram = program.kodprogram
        join guru on program.nokpguru = guru.nokpguru
        join murid on program.nokpmurid = murid.nokpmurid where kodkeputusan = $kodkeputusan";

    $data = mysqli_query($sambungan,$sql);
	$keputusan = mysqli_fetch_array($data);
	$tarikhpertandingan = date_create($keputusan['tarikhpertandingan']);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Persama  |  2020</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="laporan.css">
</head>
<body>
    <div class="wrapper">  
    
    <img src="persama2.png">
    <h2>LAPORAN KEPUTUSAN PERTANDINGAN</h2>
    <h3>Persatuan Sains Matematik SMK Kuhara Tawau</h3>

        <div class="info">

        <table class="main">
            <h3> </h3>

            <tr>
                <th width="5%"></th>
                <th width="45%" class="left" id="info">Butiran Keputusan</th>
                <th width="45%" class="right" id="info">Maklumat Keputusan</th>
                <th width="5%"></th>
            </tr>
        </table>

        <table class="klien">
            <tr>
                <th width="5%"></th>
                <th width="45%" class="left">Nama Program</th>
                <th width="45%" class="right"><?php echo $keputusan['namaprogram']; ?></th>
                <th width="5%"></th>
            </tr>

            <tr>
            <th width="5%"></th>
                <th width="45%" class="left">Nama Pertandingan</th>
                <th width="45%" class="right"><?php echo $keputusan['namapertandingan']; ?></th>
                <th width="5%"></th>
            </tr>

            <tr>
                <th width="5%"></th>
                <th width="45%" class="left">Tarikh Pertandingan</th>
                <th width="45%" class="right"><?php echo $keputusan['tarikhpertandingan']; ?></th>
                <th width="5%"></th>
            </tr>

            <tr>
                <th width="5%"></th>
                <th width="45%" class="left">Guru Penyelaras</th>
                <th width="45%" class="right"><?php echo $keputusan['namaguru']; ?></th>
                <th width="5%"></th>
            </tr>

            <tr>
                <th width="5%"></th>
                <th width="45%" class="left">Jawatankuasa Murid</th>
                <th width="45%" class="right"><?php echo $keputusan['namamurid']; ?></th>
                <th width="5%"></th>
            </tr>

            <tr>
                <th width="5%"></th>
                <th width="45%" class="left">Bilangan Penyertaan</th>
                <th width="45%" class="right">
                    <?php $sql="SELECT nokppeserta FROM peserta";
                        if ($result=mysqli_query($sambungan,$sql)) {
                            $rowcount=mysqli_num_rows($result);
                            printf(" %d Penyertaan\n",$rowcount);
                            mysqli_free_result($result); } ?>
                </th>
                <th width="5%"></th>
            </tr>
        </table>

        <table class="kereta">
            <tr>
                <th width="5%"></th>
                <th width="45%" class="left">Johan</th>
                <th width="45%" class="right"><?php echo $keputusan['nokppeserta1']; ?></th>
                <th width="5%"></th>
            </tr>

            <tr>
                <th width="5%"></th>
                <th width="45%" class="left">Naib Johan</th>
                <th width="45%" class="right"><?php echo $keputusan['nokppeserta2']; ?></th>
                <th width="5%"></th>
            </tr>

            <tr>
                <th width="5%"></th>
                <th width="45%" class="left">Ketiga</th>
                <th width="45%" class="right"><?php echo $keputusan['nokppeserta3']; ?></th>
                <th width="5%"></th>
            </tr>
        </table>

        <button onclick="window.print()">Cetak Laporan</button>
    
        </div>
    </div>
</body>
</html>