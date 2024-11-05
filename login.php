<?php
include ('sambungan.php');
if(isset($_POST['nokpguru'])){
	$nokpguru = $_POST['nokpguru'];
    $passwordguru = $_POST['passwordguru'];
	$sql = "SELECT * FROM guru";
	$result = mysqli_query($sambungan, $sql);
	$jumpa = FALSE;
	while($guru = mysqli_fetch_array($result)){
        if($guru["nokpguru"] == $nokpguru && $guru["passwordguru"] == $passwordguru) $jumpa = TRUE; 
    }

if ($jumpa == TRUE)
    echo"<script>alert('Selamat Datang ke Sistem Pengurusan Aktiviti Persatuan Sains Matematik SMK Kuhara Tawau');
    window.location='laman_guru.html'</script>";
else
    echo"<script>alert('Kesalahan pada Nama Pengguna atau Kata Laluan');
    window.location='login.php'</script>"; }
?>

<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Persama  |  2020</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <div class="wrapper">

        <div class="top_nav">
            <div class="main_menu">
            <img src="persama.png">
            </div>

            <div class="top_menu">
                <div class="title">SISTEM PENGURUSAN AKTIVITI PERSATUAN SAINS MATEMATIK SMK KUHARA TAWAU</div>
                
                <ul>
                    <li><a href="laman_pelajar.html"><i class="fas fa-home"></i></a></li>
                    <li><a href="Manual Sistem PERSAMA.pdf" download><i class="fas fa-download"></i></a></li>
                </ul>
            </div>
        </div>

            <div class="main_container">
                <div class="item">
                    <img width="49%" src="LOGO KUHARA.png">
                    <img width="49%" src="persama logo.jpg">
                </div>

                <div class="item2">
                    <form action="login.php" method="post" class="login">
                        <h3>Log Masuk Akaun Guru Penasihat</h3>
                        <div class="row">
                            <div class="col-50">
                                
                                <label>No Kad Pengenalan Guru</label>
                                <input type="text" name="nokpguru" placeholder="909090909090" required="">
                                
                                <label>Kata Laluan</label>
                                <input type="password" id="Password" name="passwordguru"  placeholder="*****" required="">
                            
                            </div>
                        </div>
                        <div><input type="checkbox" onclick="myFunction()">  Tunjukkan Kata Laluan</div>
                        <input class="login" type="submit" value="Log Masuk Akaun">
                        <input class="login" type="button" onclick="window.location='signup.php'" value="Daftar Akaun">
                    </form>
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