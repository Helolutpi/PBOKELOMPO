<?php
    session_start();

    if(!isset($_GET["id"])){
        header("location:view.php");
        exit();
    }

    include 'connect.php';

    $id = $_GET["id"];

    $getData = $connection->query("SELECT * from product WHERE productID = ".$id);

    if($getData->num_rows==0){
        header("location:view.php");
        exit();
    }

    $getData = $getData->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h1>Perbarui Product</h1>
    <form action="doUpdateProduct.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <table>
            <tr>
                <td>Nama Product</td>
                <td>:</td>
                <td><input type="text" name="productName" value="<?=$getData["productName"]?>"></td>
            </tr>
            <tr>
                <td>Deskripsi Product</td>
                <td>:</td>
                <td><textarea name="productDescription" id="" cols="30" rows="10"><?=$getData["productDescription"]?></textarea></td>
            </tr>
            <tr>
                <td>Harga Product</td>
                <td>:</td>
                <td><input type="number" name="productPrice" value="<?=$getData["productPrice"]?>"></td>
            </tr>
            <tr>
                <td>Gambar Product</td>
                <td>:</td>
                <td><input type="file" name="productImage"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button>Perbarui</button></td>
            </tr>
        </table>
    </form>
    <?php
        if (isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
    ?>
    <button><a href="view.php">Kembali</a></button>
</body>
</html>