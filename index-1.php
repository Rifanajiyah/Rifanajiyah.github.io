<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-widht,initial-scale=1.0">
        <title>Pemesanan nasi kotak</title>

    </head>
    <body>
        <form method="post" action="">
            <h1>pemesanan nasi kotak</h1>
            <img src="images.png"
            style="width:150px;height:150px;">
            <br>
            <label for="">Cabang :</label>
            <select name="branch" id="">
                <option value="pilih cabang">--Pilih Cabang--</option>
                <option value="cempaka">Well</option>
                <option value="bandung">Bandung</option>
                <option value="jakarta">Bjs</option>
            </select>
            <br>
            <label for="">Nama Pelanggan :</label>
            <input type="text" name="name"><br>
            <label for="">Nomor Hp :</label>
            <input type="text" name="PhoneNumber"><br>
            <label for="">Jumlah Kotak :</label>
            <input type="text" name="quantity"><br>
            <input type="submit" name="submit" value="Pesan"><br>
        </form>
        

<?php
if (isset($_POST['submit'])){
    $_branch = $_POST['branch'];
    $name = $_POST['name'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $quantity = $_POST['quantity'];

    echo "Pesanan Anda Telah Diterima :<br>";
    echo "Cabang :" . $_branch . "<br>";
    echo "Nama :" . $name . "<br>";
    echo "Nomor Hp :" . $PhoneNumber . "<br>";
    echo "Jumlah Kotak :" . $quantity;
    
}
?>
    </body>
</html>