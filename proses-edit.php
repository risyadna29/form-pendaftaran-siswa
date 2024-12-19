<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];  

// cek apakah ada file foto baru
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    // Proses unggah foto
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $folder = 'images/';
    
    // Simpan file ke folder
    if (move_uploaded_file($tmp, $folder . $foto)) {
        $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah', foto='$foto' WHERE id=$id";
    } else {
        die("Gagal mengunggah foto.");
    }
} else {
    // Update tanpa mengubah foto
    $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
}

$query = mysqli_query($db, $sql);

// apakah query berhasil?
if ($query) {
    header('Location: list-siswa.php');
} else {
    die("Gagal menyimpan perubahan...");
}
} else {
die("Akses dilarang...");
}

// Ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$jabatan = $_POST['jabatan'];
$departemen = $_POST['departemen'];
$nomor_telepon = $_POST['nomor_telepon'];

// Query untuk mengupdate data
$sql = "UPDATE pegawai SET 
        nama = '$nama', 
        alamat = '$alamat', 
        jenis_kelamin = '$jenis_kelamin', 
        email = '$email', 
        jabatan = '$jabatan', 
        departemen = '$departemen', 
        nomor_telepon = '$nomor_telepon' 
        WHERE ID = $id";

$query = mysqli_query($db, $sql);

if ($query) {
    header('Location: list-pegawai.php');
} else {
    echo "Gagal mengupdate data.";
}
?>

?>