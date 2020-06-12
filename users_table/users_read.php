<?php

include('functions.php');
$pdo = connect_users_id_db();

$sql = 'SELECT * FROM users_table';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
    // fetchAll()関数でSQLで取得したレコードを配列で取得できる
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // データの出力用変数（初期値は空文字）を設定
    $output = "";
    foreach ($result as $record) {
        $output .= "<tr>";
        $output .= "<td>{$record["user_id"]}</td>";
        // edit deleteリンクを追加
        $output .= "<td><a href ='users_edit.php?id={$record["id"]}'>edit</a></td>";
        $output .= "<td><a href ='users_delete.php?id={$record["id"]}'>delete</a></td>";
        $output .= "<td>{$record["created_at"]}</td>";
        $output .= "<td>{$record["updated_at"]}</td>";
        $output .= "<td>{$record["is_admin"]}</td>";
        $output .= "<td>{$record["is_deleted"]}</td>";

        $output .= "</tr>";
    }
// var_dump($record['is_admin']);
// exit()

    // $valueの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
    // 今回は以降foreachしないので影響なし
    unset($record);
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"></link>
    <title>ユーザー一覧</title>
</head>

<body>
    <main>
        <fieldset>
            <legend><h3>ユーザー一覧</h3></legend>
            <a href="admin/users_input_admin.php" class="link">User登録画面へ</a>
    
            <table>
                <thead>
                    <tr>
                        <th>ユーザー名</th>
                        <th>編集</th>
                        <th>非表示</th>
                        <th>登録</th>
                        <th>更新</th>
                        <th>is_admin</th>
                        <th>is_deleted</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $output ?>
                </tbody>
            </table>
        </fieldset>
</main>
</body>

</html>