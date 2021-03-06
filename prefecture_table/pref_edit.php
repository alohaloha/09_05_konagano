<?php
// 送信データのチェック
// var_dump($_GET);
// exit();

// 関数ファイルの読み込み
session_start(); // セッションの開始
include('functions.php'); // 関数ファイル読み込み
check_session_id(); // idチェック関数の実行

$ID = $_SESSION['id'];//session変数の定義

// idの受け取り
$id = $_GET["id"];
// DB接続

if($id != $ID){
  echo('このページを編集する権限はありません');
  exit();
}


$pdo = connect_to_pref_db();

// データ取得SQL作成
$sql = '';

// SQL準備&実行
$sql = 'SELECT * FROM pref_managers WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  // 正常にSQLが実行された場合は指定の11レコードを取得
  // fetch()関数でSQLで取得したレコードを取得できる
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
}
// var_dump($record);
// exit();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>DB連携型todoリスト（編集画面）</title>
</head>

<body>
  <form action="pref_update.php" method="POST">
    <fieldset>
      <legend>都道府県協会情報（登録）</legend>
      <a href="pref_read.php" class="link">一覧画面</a>
      <div>
        <label for="prefecture">都道府県名</label>
        <input type="text" name="prefecture" value="<?= $record['prefecture'] ?>">
      </div>
      <div>
        <label for="manager">代表者名</label>
        <input type="text" name="manager" id="manager" value="<?= $record['manager'] ?>">
      </div>
      <div>
        <label for="mail">メールアドレス</label>
        <input type="text" name="mail" id="mail" value="<?= $record['mail'] ?>">
      </div>
      <div>
        <label for="tel">電話番号</label>
        <input type="text" name="tel" id="tel" value="<?= $record['tel'] ?>">
      </div>
      <div>
        <label for="yuubin">郵便番号</label>
        <input type="text" name="yuubin" id="yuubin" value="<?= $record['yuubin'] ?>">
      </div>
      <div>
        <label for="address">住所</label>
        <input type="text" name="address" id="address" class="address" value="<?= $record['address'] ?>">
      </div>
      <div>
        <button>登録</button>
      </div>
      <input type="hidden" name="id" value="<?= ($record['id']) ?>">
    </fieldset>
  </form>

</body>

</html>