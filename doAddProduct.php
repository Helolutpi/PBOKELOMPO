<?php
session_start();
if(isset($_POST["productName"])){
    include 'connect.php';

    $productName =  $_POST["productName"];
    $productDescription = $_POST["productDescription"];
    $productPrice = $_POST["productPrice"];
    $productImage = $_FILES["productImage"];

    $message = "";

    if($productName==""){
        $message = "Nama product perlu diisi";
    }elseif($productDescription==""){
        $message = "Deskripsi product perlu diisi";
    }elseif($productPrice==""){
        $message = "Harga product perlu diisi";
    }elseif(!isset($productImage["tmp_name"]) && $productImage["tmp_name"]=""){
        $message = "Gambar product perlu diisi";
    }else {
        $filePath = "upload/".basename($productImage["name"]);
        move_uploaded_file($productImage["tmp_name"], $filePath);

        $connection->query("INSERT INTO product VALUES(null, '".$productName."', '".$productDescription."', '".$productPrice."', '".$filePath."')" );

        $message = "Product berhasil ditambahkan";
    }

    $_SESSION["message"] = $message;

}

    header("location:insert.php");
    exit()

?>