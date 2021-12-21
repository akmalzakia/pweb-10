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
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
    <div class="formulir">
    <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
        <fieldset style="display: flex; flex-direction: column;">
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label for="nis">NIS: </label>
            <input type="text" name="nis" placeholder="Nomor Induk Siswa"/>
        </p>
        <p>
            <label for="foto">Foto: </label>
            <input type="file" name="foto" placeholder="Foto" id="foto"/>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        
        <input class="button" style="align-self: center;" type="submit" value="Daftar" name="daftar" />
        </fieldset>
    </form>
    </div>
    
    </body>
</html>