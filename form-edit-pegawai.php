<?php
include("config.php");

// Ambil data berdasarkan ID
if (!isset($_GET['id'])) {
    header('Location: list-pegawai.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM data_pegawai WHERE ID = $id";
$query = mysqli_query($db, $sql);
$pegawai = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        header {
            background: #9966cb ;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
        }

        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        fieldset {
            border: none;
        }

        p {
            margin: 15px 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background: #35424a;
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h3>Form Edit Pegawai</h3>
    </header>
        <form action="proses-edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $pegawai['ID']; ?>">
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" value="<?php echo $pegawai['nama']; ?>" required>
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat" required><?php echo $pegawai['alamat']; ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <select name="jenis_kelamin" required>
                    <option value="Laki-laki" <?php if ($pegawai['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if ($pegawai['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                </select>
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="email" name="email" value="<?php echo $pegawai['email']; ?>" required>
            </p>
            <p>
                <label for="jabatan">Jabatan: </label>
                <input type="text" name="jabatan" value="<?php echo $pegawai['jabatan']; ?>" required>
            </p>
            <p>
                <label for="departemen">Departemen: </label>
                <input type="text" name="departemen" value="<?php echo $pegawai['departemen']; ?>" required>
            </p>
            <p>
                <label for="nomor_telepon">Nomor Telepon: </label>
                <input type="text" name="nomor_telepon" maxlength="13" value="<?php echo $pegawai['nomor_telepon']; ?>" required>
            </p>
            <p>
                <input type="submit" value="Simpan Perubahan">
            </p>
    </form>
</body>
</html>
