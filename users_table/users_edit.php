<?php

include('functions.php');
$id = $_GET['id'];

// var_dump($_GET);
// exit();

$pdo = connect_users_id_db();

$sql = '';

$sql = 'SELECT * FROM users_table WHERE id=:id';
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
var_dump($record['is_admin']);
var_dump($record['is_deleted']);
?>


<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/toggle.css">
	<title>User登録内容編集</title>
</head>

<body>
	<form action="users_update.php" name="users_table" method="POST">
		<fieldset>
			<legend>ユーザー登録内容（編集）</legend>
			<a href="users_read.php" class="link">一覧画面</a>
			<div>
				<label for="user_id">User ID</label>
				<input type="text" id="user_id" name="user_id" value="<?= $record['user_id'] ?>">
			</div>

			<div>
				<label for="password">パスワード</label>
				<input type="password" id="password" name="password" required value="<?= $record['password'] ?>">
			</div>

			<div>
				<label>管理者権限</label>
				<!-- <input type="hidden" name="is_admin" value="0"> -->
				<input type="checkbox" id="is_admin" name="is_admin" value="<?= $record['is_admin'] ?>">
				<label for="is_admin" class="check">
					<div></div><!--  -->
				</label>
			</div>

			<div>
				<label for=" deleted">表示</label>
				<!-- <input type="hidden" name="is_deleted" value="0"> -->
				<input type="checkbox" id="is_deleted" name="is_deleted" value="<?= $record['is_deleted'] ?>">
				<label for="is_deleted" class="check">
					<div></div><!--  -->
				</label>
			</div>

			<div>
				<label for="created" class="date">初回登録：<?= $record['created_at'] ?></label>

				<label for="updated_at" class="date">最終更新：<?= $record['updated_at'] ?></label>
				<button type="submit" id="btn" class="admin">登録</button>
			</div>
			<input type="hidden" name="id" value="<?= $record['id'] ?>">
		</fieldset>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(function() {
			const $isAdmin = document.users_table.is_admin;
			const $isDeleted = document.users_table.is_deleted;
			console.log($isAdmin.value);
			console.log($isDeleted.value);

			// if($isAdmin.value==1){	jsの書き方
			// 	$isAdmin.checked=true;
			// }
			// if($isDeleted.value==1){	jsの書き方
			// 	$isDeleted.checked=true;
			// }
			if($isAdmin.value==1){
				$('#is_admin').prop('checked',true);//jQueryの書き方
			}
			if($isDeleted.value==1){
				$('#is_deleted').prop('checked',true);//jQueryの書き方
			}

			$(document).on('change', () => {
				if (!document.users_table.is_admin.checked) {
					document.users_table.is_admin.value = 0;
				} else {
					document.users_table.is_admin.value = 1;
				}

				
				console.log(document.users_table.is_admin.value);
			});
			$(document).on('change', () => {
				if (!document.users_table.is_deleted.checked) {
					document.users_table.is_deleted.value = 0;
				} else {
					document.users_table.is_deleted.value = 1;
				}
				console.log(document.users_table.is_deleted.value);

			});
		});
	</script>
</body>

</html>