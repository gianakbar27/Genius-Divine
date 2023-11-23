<?php
include '../config/config.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tplahir = $_POST['tplahir'];
    $tglahir = $_POST['tglahir'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $jm_saudara = $_POST['jm_saudara'];
    $idkelas = $_POST['idkelas'];
    $idagama = $_POST['idagama'];
    
    $sql = "UPDATE siswa SET nama='$nama', tplahir='$tplahir', tglahir= '$tglahir', alamat='$alamat', hobi='$hobi', cita_cita='$cita_cita', jm_saudara='$jm_saudara', idkelas='$idkelas', idagama='$idagama' WHERE id=$id";
    $query = mysqli_query($conn,$sql);

    if ($query) {
        header ('Location: ../siswa.php');
    }
}
?>