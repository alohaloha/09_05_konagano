<?php
// var_dump($_POST);
// exit();

include('functions.php');

$_POST['is_admin'] = $_POST['is_admin'] == 'on' ? 1 : $_POST['is_admin'];
$_POST['is_deleted'] = $_POST['is_deleted'] == 'on' ? 1 : $_POST['is_deleted'];

$id = $_POST['id'];
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$is_admin = $_POST['is_admin'];
$is_deleted = $_POST['is_deleted'];

// DB接続
$pdo  =  connect_users_id_db();

// UPDATE文を作成&実行
$sql = "";
$sql = "UPDATE users_table SET user_id = :user_id, password = :password, `is_admin` = :is_admin, `is_deleted` = :is_deleted,updated_at = sysdate() WHERE id = :id";

// var_dump($sql);
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':is_admin', $is_admin, PDO::PARAM_INT);
$stmt->bindValue(':is_deleted', $is_deleted, PDO::PARAM_INT);
$status = $stmt->execute();
// データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常にSQLが実行された場合は一覧ページファイルに移動し，一覧ページの処理を実行する
    header("Location:users_read.php");
    exit();
}


?>