<?php
session_start();
if(isset($_POST["productName"])){
    include 'connect.php';

    $productID = $_POST["id"];
    $productName =  $_POST["productName"];
    $productDescription = $_POST["productDescription"];
    $productPrice = $_POST["productPrice"];
    $productImage = $_FILES["productImage"];

    $message = "";

    if($productName==""){
        $message = "Product name must be filled";
    }elseif($productDescription==""){
        $message = "Product description must be filled";
    }elseif($productPrice==""){
        $message = "Product price must be filled";
    }else {

        if(isset($productImage["tmp_name"]) && $productImage["tmp_name"]!=""){
            $filePath = "upload/".basename($productImage["name"]);
            move_uploaded_file($productImage["tmp_name"], $filePath);

            $connection -> query("UPDATE product SET productImage='".$filePath."' WHERE productID= ".$productID);

        }

        $connection -> query("UPDATE product SET productName='".$productName."', productDescription='".$productDescription."', productPrice='".$productPrice."' WHERE productID=".$productID);

        $message = "Barang berhasil diperbarui";
    }

    $_SESSION["message"] = $message;

    header("location:update.php?id=".$productID);
    exit();

}

    header("location:insert.php");
    exit()

?>