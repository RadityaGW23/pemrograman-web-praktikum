<?php
require 'php/functions.php';
$pakaian = query("SELECT * FROM pakaian")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <?php foreach ($pakaian as $apparel) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?= $apparel['id'] ?>">
                    <?= $apparel["warna"] ?>
                </a>
            </p>

            <?php endforeach ;?>
    </div>
</body>
</html>