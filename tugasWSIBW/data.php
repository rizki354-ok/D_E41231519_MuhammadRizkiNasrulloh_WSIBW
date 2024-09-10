<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $_POST['nama'];?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $_POST['email'];?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><?php echo $_POST['asalkota'];?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td><?php echo $_POST['gender'];?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $_POST['alamat'];?></td>
        </tr>
        <tr>
            <td>Website</td>
            <td>:</td>
            <td><?php echo $_POST['alamatwebsite'];?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $_POST['tanggallahir'];?></td>
        </tr>
        <tr>
            <td>Jumlah Anak</td>
            <td>:</td>
            <td><?php echo $_POST['jumlahanak'];?></td>
        </tr>
    </table>
</body>
</html>
