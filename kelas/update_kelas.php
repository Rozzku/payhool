<?php 
    require 'functions_kelas.php';

    // Get data dari URL
    $id = $_GET["id_kelas"];

    $kelas = query("SELECT * FROM tb_kelas WHERE id_kelas = '$id'")[0];

    if(isset($_POST["submit"])){
        if(updateKelas($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'kelas.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'kelas.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
</head>
<body>
    <form action="" method="POST">
    <input type="hidden" name="id_kelas" value="<?= $kelas["id_kelas"] ?>">
        <div class="input-box">
            <label for="kelas">Kelas</label>
            <input autocomplete="off" required type="text" name="kelas" id="kelas" value="<?= $kelas["kelas"] ?>">
        </div>
        <div class="input-box">
            <label for="jurusan">Jurusan</label>
            <input autocomplete="off" required type="text" name="jurusan" id="jurusan" value="<?= $kelas["jurusan"] ?>">
        </div>
        <div class="btn">
            <button type="reset">Batal</button>
            <button type="submit" name="submit">Ubah</button>
        </div>
    </form>
</body>
</html>