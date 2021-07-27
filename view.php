<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <h1>Tampilan Product</h1>
    <?php
        include 'connect.php';
        $getProduct = $connection->query("SELECT * from product");
        while($fetchProduct = $getProduct->fetch_assoc()){
    ?>

    <table style="display:inline-table; width:150px">
            <tr>
                <td><img style="width:150%" src="<?= $fetchProduct["productImage"]?>"></td>
            </tr>
            <tr>
                <td><strong><?=$fetchProduct["productName"]?></strong><br>
                Rp <?=number_format($fetchProduct["productPrice"])?><br><br>
                <?=$fetchProduct["productDescription"]?></td>
            </tr>
            <tr>
                <td><a href="update.php?id=<?=$fetchProduct["productID"]?>"><button>Perbarui</button></a></td>
                <td><a href="delete.php?id=<?=$fetchProduct["productID"]?>"><button>Hapus</button></a></td>
            </tr>
    </table>

    <?php
        }
    ?><table>
        <tr>
            <td>
                <br><br><button><a href="index.php">Kembali</a></button>
            </td>
        </tr>
    </table>
</body>
</html>