<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
</head>
<body>
    <header>
        <h2 align="center">Form tambah Biodata siswa </h2>
    </header>

    <form action="controller/tambah_siswa.php" method="POST" align="center">
        <div>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required>
        </div>
        <br>
        <div>
            <label for="tplahir">TPLahir :</label>
            <input type="text" name="tplahir" id="tplahir" required>
        </div>
        <br>
        <div>
            <label for="tglahir">TGLahir :</label>
            <input type="date" name="tglahir" id="tglahir" required>
        </div>
        <br>
        <div>
            <label for="alamat">Alamat :</label>
          <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
        </div>
       <br>
       <div>
            <label for="hobi">Hobi :</label>
            <input type="text" name="hobi" id="hobi" required>
        </div>
        <br>
        <div>
            <label for="cita_cita">Cita-cita:</label>
            <input type="text" name="cita_cita" id="cita_cita" required>
        </div>
        <br>
        <div>
            <label for="jm_saudara">JMSaudara :</label>
            <input type="text" name="jm_saudara" id="jm_saudara" required>
        </div>
        <br>
        <div>
            <label for="idkelas">Kelas :</label>
            <input type="text" name="idkelas" id="idkelas" required>
        </div>
        <br>
        <div>
            <label for="idagama">IDAgama :</label>
            <input type="text" name="idagama" id="idagama" required>
        </div>
        <br>
        <div>
        <input type="submit" values="submit" name="submit" id="">
        </div>
    </form>
    
</body>
</html>