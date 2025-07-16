<?php

try {
    $db = new PDO('mysql:dbname=trustshop;host=db;charset=utf8mb4', 'root', 'secret');
} catch(PDOException $e) {
    print('DB接続エラー：' . $e->getMessage());
}

?>