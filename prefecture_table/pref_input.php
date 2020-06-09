<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>都道府県協会登録ページ</title>
</head>

<body>
  <form action="pref_create.php" method="POST">
    <fieldset>
      <legend>都道府県協会情報（登録）</legend>
      <a href="pref_read.php" class="link">一覧画面</a>
      <div>
        <label for="pref">都道府県名</label>
        <input type="text" name="pref" id="pref">
      </div>
      <div>
        <label for="manager">代表者名</label>
        <input type="text" name="manager" id="manager">
      </div>
      <div>
        <label for="mail">メールアドレス</label>
        <input type="text" name="mail" id="mail">
      </div>
      <div>
        <label for="tel">電話番号</label>
        <input type="text" name="tel" id="tel">
      </div>
      <div>
        <label for="yuubin">郵便番号</label>
        <input type="text" name="yuubin" id="yuubin">
      </div>
      <div>
        <label for="address">住所</label>
        <input type="text" name="address" id="address" class="address">
      </div>
      <div>
        <button>送信</button>
      </div>
    </fieldset>
  </form>

</body>

</html>