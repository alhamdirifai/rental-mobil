<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type="text/css" href = "style.css">
    
    <title>Tambah Mobil</title>
</head>
<body>

<?php
        include 'db.php'
    ?>

<div class="container">
    

    <h1>Tambah Mobil Baru</h1>
    <form action="add_car.php" method="post">
        <label for="brand">Merek:</label>
        <input type="text" id="brand" name="brand" required><br>
        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br>
        <label for="year">Tahun:</label>
        <input type="number" id="year" name="year" required><br>
        <label for="price">Harga Sewa per Hari:</label>
        <input type="number" id="price" name="price" step="0.01" required><br>
        <input type="submit" value="Tambah Mobil">
    </form>

</div>
</body>
</html>
