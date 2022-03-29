<?php
$host = '127.0.0.1';
$db = 'logboek';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

//dsn gezet
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

//pdo maken
$pdo = new PDO($dsn, $user, $pass);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

# PRDO QUERY

$stmt = $pdo->query('SELECT * FROM elog');

$logboek = $stmt->fetchAll(PDO::FETCH_ASSOC)

//  echo "dag:", $row['dag'] . '<br>',"datum:", $row['datum']. '<br>', "gelukt:", $row ['gelukt?'] . '<br>', "gedaan:", $row['gedaan'] . '<br>', "doel:", $row['doel'] . '<br>';
// //  echo $row['dag'];
// //  echo $row['doel'];
// //  echo $row['gelukt?'];
// }



?>