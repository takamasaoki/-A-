<html>
<head>
<title>管理者画面</title>
<style type="text/css">
body{
zoom: 150%;
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
td.error{
color: red}
</style>
</head>

<body>
<table>
<td>
<select>
<OPTION value="1">2016年</OPTION>
</select>
</td>
<td>
<select>
<OPTION value="1">第1節</OPTION>
</select>
</td>
</table>
<center>
<table>
<tr>
<td class="error"></td>
<td class="title">HOME<div></td>
<td class="cell">勝敗</td>
<td class="title">AWAY</td>
<td class="weather" align=center>天気</td>
</tr>
<tr>
<td class="error">エラー用</td>
<td class="cell">
<select>
<OPTION value="1">チーム名</OPTION>
</select>
</td>
<td class="cell">
<select>
<OPTION value="1">勝利</OPTION>
<OPTION value="1">敗北</OPTION>
<OPTION value="1">引き分け</OPTION>
</select>
</td>
<td class="cell">
<select>
<OPTION value="1">チーム名</OPTION>
</td>
</select>
<td class="weather">
<input type="radio" value="晴れ" checked> 晴れ
<input type="radio" value="雨"> 雨
<input type="radio" value="曇り"> 曇り</td>
</tr>
</table>
<br>
<form>
<input type='submit' value='送信'>
</form>
</body>
</CENTER>
</html>
