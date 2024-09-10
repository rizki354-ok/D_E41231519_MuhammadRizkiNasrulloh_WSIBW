<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cek-kelulusan.php" method="post">
        <label for="nama">Masukkan nama</label>
        <input type="text" name="nama" id="nama" placeholder="John" required><br><br>
        <label for="value">Masukkan nilai</label>
        <input type="number" name="value" id="value" min="0" max="100" required>
        <input type="submit" value="submit">
    </form><br><br>
        <?php
        $nilai= isset($_POST['value'])?$_POST['value']:-1;
        if(isset($_POST['nama'])){
        echo "Hello ",$_POST['nama'], " kamu";
        if($nilai >= 65){
        echo "<p style=\"color: #00be00;\">Lulus<p>";
        }else if($nilai >=50 && $nilai <65){
        echo "<p style=\"color: yellow;\">Harus Mengulang<p>";
        }else if($nilai>=0){
        echo "<p style=\"color: red;\">Tidak Lulus<p>";
        }else echo " belum memasukkan nilai";
        }
        ?>
</body>
</html>