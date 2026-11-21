<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>STEP4テスト:confirm</title>
</head>
<body>
 <h1>入力内容確認</h1>

<?php
 if($_SERVER["REQUEST_METHOD"]==="POST"){
  $name=$_POST["name"];
  $age=$_POST["age"];
  $phone=$_POST["phone"];
  $email=$_POST["email"];
  $address=$_POST["address"];
  $ask=$_POST["ask"];
  $gen=$_POST["gen"];

//バリデーション
 if(!preg_match("/^[一-龠々ぁ-んァ-ヶーa-zA-Z]+$/u",$name)){
  echo"<p>名前はひらがな、カタカナ、漢字、英字のみで使用できます。</p>";
 }elseif(!is_numeric($age) || $age < 0  || $age > 150){
  echo"<p>年齢は0から150の間で入力してください。</p>";
 }elseif(!preg_match("/^([0-9-])+$/",$phone)){
  echo"<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
 }elseif(!preg_match("/^[a-zA-Z0-9\.%+-]+@[a-zA-Z0-9\.-]+\.[a-zA-Z]{2,}$/", $email)){
  echo"<p>メールアドレスの形式が正しくありません。</p>";
 }elseif(!preg_match("/^[一-龠々ぁ-んァ-ヶーa-zA-Z0-9-]+$/u",$address)){
  echo"<p>住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。</p>";
}else{
//入力内容の表示
  echo"<p>名前:" .htmlspecialchars($name, ENT_QUOTES, "UTF-8")."</p>";
  echo"<p>年齢:{$age}</p>";
  echo"<p>電話番号:{$phone}</p>";
  echo"<p>メールアドレス:{$email}</p>";
  echo"<p>住所:{$address}</p>";
  echo"<p>質問:{$ask}</p>";
  echo"<p>性別:".htmlspecialchars($gen, ENT_QUOTES, "UTF-8")."</p>";
  }}
 ?>

</body>
</html>