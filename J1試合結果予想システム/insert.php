<?php
try{
    $pdo = new PDO(
        'mysql:host=192.168.0.1;dbname=cv45224_ag4;charset=utf8',
        'cv45224_ag4',
        'peZC9M5W'
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch(PDOException $Exception){
    die('接続エラー：' .$Exception->getMessage());
}

try{
    $year = $_GET['year'];
    $section = $_GET['section'];
    $sql = "SELECT * FROM schedule WHERE year='{$year}' AND section='{$section}'";
  
    $stmh = $pdo->prepare($sql);
    $stmh->execute();
}catch(PDOException $Exception){
    die('接続エラー：' .$Exception->getMessage());
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset='utf-8' />
<title>管理者画面</title>
<style type="text/css">
body{
zoom: 100%;
align: center;
}
td.cell {
text-align: center;
width: 110px;
}
td.title{
text-align: center;
width: 110px;
border: 1px solid; 
}
td.weather{
width: 170px;
}
</style>
</head>

<body>

<form action="insert.php" method="get">
<select name="year">
<?php optionLoop('2011', date('Y'));?>
</select>
年
<br>
<select name="section">
<?php optionLoop('1', '34');?>
</select>
節
<?php
//セレクトオプションのループ設定
function optionLoop($start, $end){	
	for($i = $start; $i <= $end; $i++){
		echo "<option value=\"{$i}\">{$i}</option>";
	}
}
?>
  <br>
    <input type='submit' value='決定'></form>
<center>
<table>
<td></td>
<td class="title">HOME<div></td>
<td class="cell">勝敗</td>
<td class="title">AWAY</td>
<td class="weather" align=center>天気</td>
<tr>
  
  <?php
    while($table = $stmh->fetch(PDO::FETCH_ASSOC)){
  ?>
  </tr>

<td></td>
<td class="cell">
<?php echo(htmlspecialchars($table['home'])); ?>
</td>
<td class="cell">
<form action="insert.php" method="get">
  <select name='result'>
<OPTION value="勝利">勝利</OPTION>
<OPTION value="敗北">敗北</OPTION>
<OPTION value="引き分け">引き分け</OPTION>
<OPTION value="無試合">無試合</OPTION>
</select>
</td>

<td class="cell">
<?php echo(htmlspecialchars($table['away'])); ?>
  </td>
<td class="weather">
<input type="radio" name="q1" value="晴れ" checked> 晴れ
<input type="radio" name="q1" value="雨"> 雨
<input type="radio" name="q1" value="曇り"> 曇り</td>
<?php
    }
    $pdo = null;
?>
</table>
<br>
<input type='submit' value='送信'>
</form>
</body>
</CENTER>
</html>
