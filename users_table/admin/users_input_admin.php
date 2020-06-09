<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/toggle.css">
  </link>
  <title>ユーザー登録(管理者)</title>
</head>

<body>
  <main>
    <form action="users_create_admin.php" method="post" name="users_input_admin">
      <fieldset>
        <legend>
          <h3>ユーザー登録(管理者)</h3>
        </legend>
        <a href="users_read.php" class="link">User一覧</a>
        <div>
          <label for="user_id">User ID</label>
          <input type="text" id="user_id" name="user_id" required placeholder="user_id">
        </div>

        <div>
          <label for="password">パスワード</label>
          <input type="password" id="password" name="password" required placeholder="password">
        </div>

        <div>
          <label>管理者権限</label>
          <input type="hidden" name="is_admin" value="0">
          <input type="checkbox" id="is_admin" name="is_admin">
          <label for="is_admin" class="check">
            <div></div><!--  -->
          </label>
        </div>

        <div>
          <label for=" deleted">表示</label>
          <input type="hidden" name="is_deleted" value="0">
          <input type="checkbox" id="is_deleted" name="is_deleted">
          <label for="is_deleted" class="check">
            <div></div><!--  -->
          </label>
        </div>
        <button type="submit" id="btn">登録</button>
        </div>
      </fieldset>
    </form>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(document).on('change', () => {
      if (!document.users_input_admin.is_admin.checked) {
        document.users_input_admin.is_admin.value = 0;
      }  else {
        document.users_input_admin.is_admin.value = 1;
      }
      console.log(document.users_input_admin.is_admin.value);
      if (!document.users_input_admin.is_deleted.checked) {
        document.users_input_admin.is_deleted.value = 0;
      } else {
        document.users_input_admin.is_deleted.value = 1;
      }
      console.log(document.users_input_admin.is_deleted.value);
    });
    // $(document).on('change', () => {
    // });
  </script>
</body>

</html>