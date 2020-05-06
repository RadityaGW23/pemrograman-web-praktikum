<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Loaction: login.php");
    exit;
}
	require 'functions.php';

	if (isset($_POST["tambah"])) {
			


		if (tambah($_POST) > 0) {
			echo 	"<script>
                            alert('data berhasil ditambahkan!');
                            document.location.href = 'admin.php';
			        </script>";
		}else {
			echo "<script>
                        alert('data gagal ditambahkan!');
                        document.location.href = 'admin.php';
			    </script>";
		}

    }
    
    

?>

<html >
<head>
    
    <title>document</title>
</head>
<body>

 <h3>Form Tambah Data Pakaian</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="ukuran">Gambar :</label><br>
                <input type="text" name="gambar" id="gambar" required>           
            </li>
            <li>
                <label for="ukuran">Ukuran :</label><br>
                <input type="text" name="ukuran" id="ukuran" required>           
            </li>
            <li>
                <label for="warna">Warna :</label><br>
                <input type="text" name="warna" id="warna" required>           
            </li>
            <li>
                <label for="keterangan">Keterangan :</label><br>
                <input type="Keterangan" name="keterangan" id="keterangan" required>            
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                    <select name="harga" id="harga" required>           
                        <option value="">----------Pilih Harga----------</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                    </select>
            </li><br>
            <button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>    
</body>
</html>

