<?php
session_start();

// エラーメッセージを格納する変数を初期化
$error_message = "";

// ログインボタンが押されたかを判定
// 初めてのアクセスでは認証は行わずエラーメッセージは表示しないように
if (isset($_POST["login"])) {

// user_nameが「php」でpasswordが「password」だとログイン出来るようになっている
if ($_POST["password"] == "password") {

// ログインが成功した証をセッションに保存
$_SESSION["user_name"] = $_POST["user_name"];

// 管理者専用画面へリダイレクト
$login_url = "http://{$_SERVER["HTTP_HOST"]}/insert.php";
header("Location: {$login_url}");
exit;
}
$error_message = "パスワードが違います";
}
?>
<meta charset='utf-8' />
<html>
<head>
<title>ログイン画面</title>
<style type="text/css">
body{
zoom: 200%;
}
</style>
</head>
<body marginheight="40" marginwidth="50">
<CENTER>
<h1>J1リーグ勝敗予想システム
<br>（管理者専用）
</h1>
パスワードを入力してください。
<form action="login.php" method="POST" >
<input type="password" name="password" value"" /><br />

<?php
if ($error_message) {
print '<font color="red">'.$error_message.'</font>';
}
?>
<br>

<input type="submit" name="login" value="ログイン" />
</form>
</body>
</CENTER>
</html>
