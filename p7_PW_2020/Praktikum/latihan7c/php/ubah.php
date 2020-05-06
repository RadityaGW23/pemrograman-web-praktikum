<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit;
}
    require 'functions.php';    
    $id = $_GET['id'];
    $apparel = query("SELECT * FROM pakaian WHERE id = $id")[0];

	if (isset($_POST["ubah"])) {

		if (ubah($_POST) > 0) {
			echo 	"<script>
                            alert('data berhasil diubahkan!');
                            document.location.href = 'admin.php';
			        </script>";
		}else {
			echo "<script>
                        alert('data gagal diubahkan!');
                        document.location.href = 'admin.php';
			    </script>";
		}

    }
    
    

?>

<html >
<head>
    
    <title>Document</title>
</head>
<body>

 <h3>Form Ubah Data Pakaian</h3>
 <form action="" method="post">
 <input type="hidden" name="id" value="<?= $apparel['id'];?>">
        <ul>
            <li>
                <label for="gambar">Gambar :</label><br>
                <input type="text" name="gambar" value="<?= $apparel['gambar'];?>">           
            </li>
            <li>
                <label for="ukuran">Ukuran :</label><br>
                <input type="text" name="ukuran" value="<?= $apparel['ukuran'];?>">           
            </li>
            <li>
                <label for="warna">Warna :</label><br>
                <input type="text" name="warna" value="<?= $apparel['warna'];?>">     
            </li>
            <li>
                <label for="keterangan">Keterangan :</label><br>
                <input type="Keterangan" name="keterangan" value="<?= $apparel['keterangan'];?>">               
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                    <select name="harga" id="harga" required>           
                        <option value="">----------Pilih Harga----------</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                    </select>
            </li><br>
            <button type="submit" name="ubah">Ubah Data</button>
            <button type="submit">
                <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>

</body>
</html>

