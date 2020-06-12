<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>都道府県協会ログイン</title>
</head>

<body>
    <form action="first_login_act.php" method="POST" name="first_login" method="POST">
        <fieldset>
            <legend>
                <h3>初回ログイン画面</h3>
            </legend>
            <div>
                <label for="mail">都道府県</label>
                <input type="text" name="prefecture" id="prefecture" placeholder="都道府県">
            </div>
            <div>
                <label for="initial_password">初期パスワード</label>
                <input type="text" name="initial_pw" id="initial_pw" placeholder="初期パスワード">
            </div>
            <div class="btn_wrapper">
                <button id="first_submit">初回ログイン</button>
                <a href="pref_login.php" class="link long">代表者登録がお済みの方はこちら</a>
            </div>
        </fieldset>
    </form>
</body>

</html>