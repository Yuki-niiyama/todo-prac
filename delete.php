<?php

//攻撃対策関数とDBを読み込むための関数を読み込む
require_once('dbconnect.php');
require_once('function.php');

// データの受け取り
$id = $_POST['id'];


// DBからデータの削除
$stmt = $dbh->prepare('DELETE FROM tasks WHERE id = ?');
$stmt->execute([$id]);

// リダイレクト
header("location: index.php");