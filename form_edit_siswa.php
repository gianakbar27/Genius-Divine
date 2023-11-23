<?php
include 'config/config.php';

if(!isset($_GET['id'])){
    header ('location: siswa.php');
}
$id =$_GET['id'];

$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($conn,$sql);
$siswa = mysqli_fetch_array($query);

if (mysqli_num_rows($query) <1){
    die("data tidak di temukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit siswa</title>
</head>
<body>
    <head>
        <h2 align="center"> Edit data siswa</h2>
    </head>
    <form action ="controller/edit_siswa.php" method="POST" align="center">
        <input type="hidden" name="id" value="<?php echo $siswa['nama'] ?>"/>
        <div>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?php echo $siswa['nama']?>">
        </div>
        <br>
        <div>
            <label for="tplahir">TPLahir : </label>
            <input type="text" name="tplahir" id="tplahir" value="<?php echo $siswa['tplahir']?>">
        </div>
        <br>
        <div>
            <label for="tglahir">TGLahir : </label>
            <input type="date" name="tglahir" id="tglahir" value="<?php echo $siswa['tglahir']?>">
        </div>
        <br>
        <div>
            <label for="alamat">Alamat :</label>
          <textarea name="alamat" id="alamat" cols="30" rows="10"><?php echo $siswa['alamat']?></textarea>
        </div>
        <br>
        <div>
            <label for="hobi">Hobi : </label>
            <input type="text" name="hobi" id="hobi" value="<?php echo $siswa['hobi']?>">
        </div>
        <br>
        <div>
            <label for="cita_cita">Cita-cita : </label>
            <input type="text" name="cita_cita" id="cita_cita" value="<?php echo $siswa['cita_cita']?>">
        </div>
        <br>
        <div>
            <label for="jm_saudara">Jumlah Saudara : </label>
            <input type="text" name="jm_saudara" id="jm_saudara" value="<?php echo $siswa['jm_saudara']?>">
        </div>
        <br>
        <div>
            <label for="idkelas">IDKelas : </label>
            <input type="text" name="idkelas" id="idkelas" value="<?php echo $siswa['idkelas']?>">
        </div>
        <br>
        <div>
            <label for="idagama">IDAgama : </label>
            <input type="text" name="idagama" id="idagama" value="<?php echo $siswa['idagama']?>">
        </div>
        <br>
        <input type="submit" value="simpan" name="submit">

    </form>
    
</body>
</html>