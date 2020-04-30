<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="card text-center">
        <div class="card-header bg-danger mb-3">
            PAKAIAN
        </div>
        <div class="card-body">
            <div class="gambar">
                <img src="../assets/img/<?= $pakaian["gambar"]; ?>" alt="">
            </div>  
            <div class="keterangan"> 
                <p><?= $pakaian ["ukuran"]; ?></p>
                <p><?= $pakaian ["warna"]; ?></p>
                <p><?= $pakaian ["keterangan"]; ?></p>
                <p><?= $pakaian ["harga"]; ?></p>
            </div>
        </div>
        <div class="card-footer text-muted bg-danger mb-3">
        <button type="button" class="btn btn-dark"><a href="../index.php">Kembali</a></button>
        </div>
    </div>            
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html>