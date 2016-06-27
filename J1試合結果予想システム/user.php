<html>
<head>
<title>ユーザー画面</title>
<style type="text/css">
body{
zoom: 150%;
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
<center>
<body>

<table>
<tr>
<td class="cell"></td>
<td class="title">HOME</td>
<td class="cell">
<select>
<OPTION value="1">第1節</OPTION>
</select></td>
<td class="title">AWAY</td>
<td class="cell"></td>
<td class="weather" align=center>天気</td>
</tr>
<tr>
<td class="cell">勝利</td>
<td class="cell">チーム</td>
<td class="cell"></td>
<td class="cell">チーム</td>
<td class="cell"></td>
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
