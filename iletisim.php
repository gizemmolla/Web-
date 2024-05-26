<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-item:hover {
            border: 1px solid #3a3d3d; 
            border-radius: 5px; 
        }
        body {
    background-image: url('gorseller/arkaplan.gif');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.container {
        text-align: center;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: rgba(134, 142, 142, 0.5);
        border-radius: 15px;
        }
        .container {
            margin-top: 5rem;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #222d33;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href="index.html">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hakkimda.html">Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="api.html">İlgi Alanım</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Giriş Yap</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="iletisim.html">İletişim <span class="sr-only">(şu anki)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $ad = $_GET['ad'];
    $soyad = $_GET['soyad'];
    $email = $_GET['email'];
    $cinsiyet = $_GET['cinsiyet'];
    $renk = $_GET['renk'];
    $dil = $_GET['dil'];
    $puan = $_GET['puan'];
    
        echo "<h1>Cevaplarınız</h1>";
        echo "<p>Ad: $ad</p>";
        echo "<p>Soyad: $soyad</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Cinsiyet: $cinsiyet</p>";
        echo "<p>En Sevilen Renk: $renk</p>";
        echo "<p>En Sevilen Programlama Dili: $dil</p>";
        echo "<p>Siteye Verilen Puan: $puan</p>";
    }
    ?>
    </div>    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>