<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>¨ユーザー登録</title>
</head>

<body>
    <main>
        <form action="users_create_user.php" method="POST">
            <fieldset class="user_fieldset">
                <a href="users_read.php" class="link">一覧へ</a>
                <legend>
                    <h3>ユーザー登録</h3>
                </legend>
                <div>
                    <label for="user_id">User ID</label>
                    <input type="text" id="user_id" name="user_id" placeholder="お名前">
                </div>

                <div>
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" minlength="6" placeholder="6文字以上">
                </div>
                <div>
                    <button type="submit" id="submit">登録</button>
                </div>
            </fieldset>
        </form>
    </main>
</body>

</html>