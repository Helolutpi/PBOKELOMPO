<?php
$connection = new mysqli("localhost", "root", "", "crudphp");

if(!$connection){
    echo "Server not found";
    exit();
}