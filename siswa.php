<?php
include  'config/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiodataSiswa</title>
</head>
<body>
    <div class="container">
        <head>
            <h2 align="center"> Biodata Siswa</h2>
        </head>
        <nav class="align-middle">
            <a href="form_tambah_siswa.php">Tambah Siswa</a>
        </nav>
        <br>
        <table border= "10">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>TPLahir</th>
                    <th>TGLahir</th>
                    <th>Alamat</th>
                    <th>Hobi</th>
                    <th>Cita-Cita</th>
                    <th>JM-Saudara</th>
                    <th>IDKelas</th>
                    <th>IDAgama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($conn,$sql);
                while ($siswa = mysqli_fetch_array($query)){

                    echo "<tr>";
                    echo "<td>".$siswa['id']."</td>"; 
                    echo "<td>".$siswa['nama']."</td>"; 
                    echo "<td>".$siswa['tplahir']."</td>"; 
                    echo "<td>".$siswa['tglahir']."</td>"; 
                    echo "<td>".$siswa['alamat']."</td>"; 
                    echo "<td>".$siswa['hobi']."</td>"; 
                    echo "<td>".$siswa['cita_cita']."</td>"; 
                    echo "<td>".$siswa['jm_saudara']."</td>"; 
                    echo "<td>".$siswa['idkelas']."</td>"; 
                    echo "<td>".$siswa['idagama']."</td>";

                     echo "<td>";
                    echo "<a href='form_edit_siswa.php?id=".$siswa['id']."'>edit</a> l ";
                    echo "<a href='controller/hapus_siswa.php?id=".$siswa['id']."'>hapus</a>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <p align="center">Jumlah Siswa: <?php echo mysqli_num_rows($query)?></p>
        <?php if (isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'Berhasil'){
                    echo "Berhasil di tambah";
                } else {
                    echo "Gagal di tambah";
                }
                ?>
                <?php endif;?>
            </p>
    
</body>
</html>