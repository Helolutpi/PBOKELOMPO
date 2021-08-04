<?php
$connection = new mysqli("remotemysql.com", "XkwJVNQUzH", "VUGrvlmbPE", "XkwJVNQUzH");

if(!$connection){
    echo "Server not found";
    exit();
}