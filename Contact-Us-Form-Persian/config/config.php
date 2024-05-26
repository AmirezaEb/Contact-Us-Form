<?php

#------# Admin #------#

$adminPassword = '12345';
$adminEmail = 'aabrahimi1718@gmail.com';

#--- Information ---#

const Address = 'جمهوری اسلامی ایران';
const Email = 'aabrahimi1718@gmail.com';
const PhoneNumber = '+989358919279';

#--- Social Media ---#

const Instagram = 'https://www.instagram.com/amireza._.eb';
const Telegram = 'https://t.me/HeroExpert_ir'; #Telegram Link
const Linkedin = 'https://www.linkedin.com/in/amirreza-ebrahimi-9623052a9';  #Linkedin Link
const Github = 'https://github.com/AmirezaEb'; #Github Link

#------# DataBase #------#

$userName = 'root'; #Db username
$dbName = 'heroexpert'; #Db name
$passWord = ''; #Db password

try {
    $connect = new PDO('mysql:host=localhost;dbname=' . $dbName, $userName, $passWord);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    #echo "Connecting Successfully";
} catch (Exception $e) {
    #echo "Connect Failed : " . $e->getMessage();
}
?>