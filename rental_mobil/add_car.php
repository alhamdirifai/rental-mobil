<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $price = $_POST['price'];

    $sql = "INSERT INTO cars (brand, model, year, rental_price_per_day) VALUES ('$brand', '$model', '$year', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Mobil baru berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
