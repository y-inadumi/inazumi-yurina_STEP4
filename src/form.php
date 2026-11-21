<!DOCTYPE html lang="ja">
<head>
<meta charset="utf-8">
<title>STEP4テスト:form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 <h1>フォーム入力</h1>
 <form action="confirm.php" method="POST">

  <label for="name">名前:</label>
  <input type="text" id="name" name="name" required/><br><br>

  <label for="age">年齢:</label>
  <input type="number" id="age" name="age" required/><br><br>

  <label for="phone">電話番号:</label>
  <input type="tel" id="phone" name="phone" required/><br><br>

  <label for="email">メールアドレス:</label>
  <input type="email" id="email" name="email" required/><br><br>

  <label for="address">住所:</label>
  <input type="text" id="address" name="address" required/><br><br>

  <label for="ask">質問:</label>
  <input type="text" id="ask" name="ask" /><br><br>

  <label for="gen">性別:</label>
  <select id="gen" name="gen" required>
   <option value="男性">男性</option>
   <option value="女性">女性</option>
  </select><br><br>

 <button type="submit">送信</button>

 </form>
</body>
</html>