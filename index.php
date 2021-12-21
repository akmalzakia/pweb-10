<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header style="text-align: center;">
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMA 0</h1>
    </header>

    <div class="menu">
    <h4 style="text-align: center;">Menu</h4>
    <hr>
    <nav style="text-align: center;">
    <a href="form-daftar.php">
        <button class="button">Daftar Baru</button>
    </a>
    <br>
    <a href="list-siswa.php">
        <button class="button">Data Pendaftar</button>
    </a>
    </nav>
    </div>
    
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>