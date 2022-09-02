<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tsa_web";
$connect = new mysqli($dbhost, $dbuser, $dbpass,$dbname); 
if ($connect->connect_error) {
die("Connection failed: " . $connect->connect_error);
}
?>

    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <title>Tabel User</title>
        <style>
            /* ====GLOBAL STYLE==== */
            
            body {
                background-color: #F8F8F8;
            }
            
            div.container {
                width: 960px;
                padding: 10px 50px 50px;
                background-color: white;
                margin: 20px auto;
                box-shadow: 1px 0px 10px, -1px 0px 10px;
            }
            
            h1 {
                text-align: center;
                font-family: Cambria, "Times New Roman", serif;
                clear: both;
            }
            /* ======TABLE====== */
            
            table {
                border-collapse: collapse;
                border-spacing: 0;
                border: 1px black solid;
                width: 100%
            }
            
            th,
            td {
                padding: 8px 15px;
                border: 1px black solid;
            }
            
            tr:nth-child(2n+3) {
                background-color: #F2F2F2;
            }
        </style>

    </head>

    <body>
        <div class="container">
            <h1>Data User</h1>

            <table border="1">
                <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ROLE</th> 
                </tr>
                <?php
$query = "SELECT * FROM user";
$result = mysqli_query($connect, $query);
// ambil semua isi tabel ke dalam bentuk array 2 Dimensi
$hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($hasil as $data ) {

echo "<tr>";
echo "<td>$data[id]</td>";
echo "<td>$data[username]</td>";
echo "<td>$data[password]</td>";
echo "<td>$data[role]</td>"; 
 echo "</tr>";
}
?>
            </table>
        </div>
    </body>

    </html>