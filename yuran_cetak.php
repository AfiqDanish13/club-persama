<?php
    include('sambungan.php');

    $sql = "select * from murid ";

    $data = mysqli_query($sambungan,$sql);
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
    <h2>LAPORAN KUTIPAN YURAN</h2>
    <h3>Persatuan Sains Matematik SMK Kuhara Tawau</h3>

        <div class="info">

        <table class="main">
            <h3> </h3>

            <tr>
                <th width="5%"></th>
                <th width="45%" class="left" id="info">Butiran</th>
                <th width="45%" class="right" id="info">Maklumat</th>
                <th width="5%"></th>
            </tr>
        </table>

        <table class="klien">
        <tr>
                <th width="5%"></th>
                <th width="45%" class="left">Bilangan Ahli Berdaftar</th>
                <th width="45%" class="right">
                    <?php $sql="SELECT nokpmurid FROM murid";
                        if ($result=mysqli_query($sambungan,$sql)) {
                            $rowcount=mysqli_num_rows($result);
                            printf(" %d Ahli\n",$rowcount);
                            mysqli_free_result($result); } ?>
                </th>
                <th width="5%"></th>
            </tr>

            <tr>
            <th width="5%"></th>
                <th width="45%" class="left">Kutipan Yuran Bagi Ahli Biasa</th>
                <th width="45%" class="right">RM 10.00</th>
                <th width="5%"></th>
            </tr>

            <tr>
                <th width="5%"></th>
                <th width="45%" class="left">Kutipan Yuran Bagi Jawatankuasa Tertinggi</th>
                <th width="45%" class="right">RM 15.00</th>
                <th width="5%"></th>
            </tr>

            <tr>
                <th width="5%"></th>
                <th width="45%" class="left">Jumlah Kutipan Yuran</th>
                <th width="45%" class="right" style="color:green">RM
                <?php $result = mysqli_query($sambungan, 'SELECT SUM(yuran) AS value_sum FROM murid'); 
                $row = mysqli_fetch_assoc($result); 
                $sum = $row['value_sum'];
                echo $sum;
                ?>
                </th>
                <th width="5%"></th>
            </tr>
            
        </table>


        <button onclick="window.print()">Cetak Laporan</button>
    
        </div>
    </div>
</body>
</html>