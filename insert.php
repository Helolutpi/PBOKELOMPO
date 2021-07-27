<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Create</title>
</head>
<body>
    
    
    <div class="kotak">
        <form action="doAddProduct.php" method="POST" enctype="multipart/form-data"class="form">
            <p class="judulweb" style="font-size: 2rem; font-weight: 800;">Menambahkan Barang</p>
		        <div class="productName">
			        <td> Nama Product: <input type="text" placeholder="Nama Product" name="productName" required> </td>
		        </div>
                <div class="productDescription">
                
                    <td>Deskripsi Product: </td>
                    <td><textarea type="text"  placeholder="Deskripsi Product"  name="productDescription" id="" cols="22" rows="5" <textarea> </textarea></td>
                </div>
                <div class="productPrice">
			        <td>Harga Product: <input type="number" placeholder="Harga Product" name="productPrice" required> </td>
		        </div>
                <div class="productImage">
			        <td>Gambar Product: <input type="file"  name="productImage" required> </td>
		        </div>
                <div class="tombol-submit">
			        <button name="submit" class="btn">Simpan</button>
		        </div>
                
        
        
    </form>
    <?php
        if (isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
    ?>
    <button>
        <a href="index.php"class="btn">Kembali</a>
                    
    </button>

    </div>
</body>
</html>