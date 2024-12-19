<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Pegawai</title>
</head>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

header {
    background-color: #9966cb;
    color: #fff;
    padding: 20px;
    text-align: center;
}

h3 {
    margin: 0;
}

fieldset {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    margin: 20px auto;
    width: 50%;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
textarea,
input[type="radio"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

textarea {
    resize: vertical;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
</style>

<body>
    <header>
        <h3>Formulir Pegawai SMK Daydream Key</h3>
    </header>
    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" required>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <select name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="email" name="email" required>
        </p>
        <p>
            <label for="jabatan">Jabatan: </label>
            <input type="text" name="jabatan" required>
        </p>
        <p>
            <label for="departemen">Departemen: </label>
            <input type="text" name="departemen" required>
        </p>
        <p>
            <label for="nomor_telepon">Nomor Telepon: </label>
            <input type="text" name="nomor_telepon" maxlength="13" required>
        </p>
        <p>
            <input type="submit" value="Daftar">
        </p>
    </form>
</body>
</html>
