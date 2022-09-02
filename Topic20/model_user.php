<?php
function buatKoneksi(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "tsa_web";
return  mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
}

function getTableUser(){
    $link = buatKoneksi();
    $query = "SELECT * FROM user";
    $result = mysqli_query($link, $query); 

    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}

   echo "<pre>";
   print_r(getTableUser());
   echo "</pre>";
?>