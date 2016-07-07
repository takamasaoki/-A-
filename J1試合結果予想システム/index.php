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
<html>
<head>
<meta charset='utf-8' />
<title>ユーザー画面</title>
<style type="text/css">
body{
zoom: 100%;
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
  <form action="index.php" method="get">
    <input type="hidden" name="year" value="2016">
 第
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
<input type='submit' value='決定'>
    </form>
<center>

<table>
<tr>
<td class="cell"></td>
<td class="title">HOME</td>
<td class="cell"></td>
<td class="title">AWAY</td>
<td class="cell"></td>
<td class="weather" align=center>天気</td>
</tr>

<tr>
<?php
    while($table = $stmh->fetch(PDO::FETCH_ASSOC)){
?>
<td class="cell">勝利</td>
<td class="cell"><?php echo(htmlspecialchars($table['home'])); ?></td>
<td class="cell"></td>
<td class="cell"><?php echo(htmlspecialchars($table['away'])); ?></td>
<td class="cell">勝利</td>
<td class="weather">
<input type="radio" name="q1" value="晴れ" checked> 晴れ
<input type="radio" name="q1" value="雨"> 雨
<input type="radio" name="q1" value="曇り"> 曇り</td>
</tr>
<?php
    }
    $pdo = null;
?>
</table>
<br>

<form>
<input type='submit' value='予測開始'>
</form>

 
</body>
</center>
    <a href="login.php" ><input type='submit' value='管理者画面'></a>
</html>
