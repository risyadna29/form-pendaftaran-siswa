<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        header {
            background: #9966cb;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            margin: 20px 0;
            text-align: center;
        }

        nav a {
            background: #9966cb;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        nav a:hover {
            background: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: white;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #dddddd;
        }

        th {
            background: #9966cb;
            color: white;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        tr:hover {
            background: #e1e1e1;
        }

        p {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <h3>Daftar Pegawai</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <h3>Daftar Pegawai</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Jabatan</th>
            <th>Departemen</th>
            <th>Nomor Telepon</th>
            <th>Tindakan</th>
        </tr>

        <?php
        $sql = "SELECT * FROM data_pegawai";
        $query = mysqli_query($db, $sql);

        while ($pegawai = mysqli_fetch_array($query)): ?>
        <tr>
            <td><?php echo $pegawai['ID']; ?></td>
            <td><?php echo $pegawai['nama']; ?></td>
            <td><?php echo $pegawai['alamat']; ?></td>
            <td><?php echo $pegawai['jenis_kelamin']; ?></td>
            <td><?php echo $pegawai['email']; ?></td>
            <td><?php echo $pegawai['jabatan']; ?></td>
            <td><?php echo $pegawai['departemen']; ?></td>
            <td><?php echo $pegawai['nomor_telepon']; ?></td>
            <td>
                <a href="form-edit-pegawai.php?id=<?php echo $pegawai['ID']; ?>">Edit</a> |
                <a href="hapus.php?id=<?php echo $pegawai['ID']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>
