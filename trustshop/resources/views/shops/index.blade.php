<?php
$dsn = 'mysql:dbname=trustshop;host=db_trustshop';
$user = 'trustshop_user';
$password = 'secret';

try {
    // データベースに接続
    $dbh = new PDO($dsn, $user, $password);

    // SQL実行
    $sql=$dbh->query('select * from users inner join shops on users.user_id=shops.user_id');
} catch (PDOException $e) {
    print('Error:' . $e->getMessage());
    die();
}
foreach ($sql as $users) {
    //idを人数分繰り返し表示する
    echo ($users["id"]). '<br>';
}