<html>
<head>
<title>My Calc</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<style type="text/css">
table {
		font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
		font-size: 14px;
		border-collapse: collapse;
		text-align: center;
}
th, td:first-child {
		background: #AFCDE7;
		color: white;
		padding: 10px 20px;
}
th, td {
		border-style: solid;
		border-width: 0 1px 1px 0;
		border-color: white;
}
td {
		background: #D8E6F3;
}
th:first-child, td:first-child {
		text-align: left;
}
</style>
</head>
<body>


<?php if ($message!==true):?>
<?=$message;?>
<?php endif;?>
<h3>Математические операции</h3>
<table>
<tr>
	<td>Действие</td>
	<td>Результат</td>
</tr>
<tr>
	<td><?="$a+$b"?></td>
	<td><?=$add?></td>
</tr>
<tr>
	<td><?="$a-$b"?></td>
	<td><?=$sub?></td>
</tr>
<tr>
	<td><?="$a*$b"?></td>
	<td><?=$mult?></td>
</tr>
<tr>
	<td><?="$a/$b"?></td>
	<td><?=$div?></td>
</tr>
<tr>
	<td><?="$b<sup><small>2</small></sup>"?></td>
	<td><?=$square?></td>
</tr>
<tr>
	<td>√<?="$a"?></td>
	<td><?=$sqrt?></td>
</tr>
<tr>
	<td><?="$b% от $a"?></td>
	<td><?=$percent?></td>
</tr>
<tr>
	<td><?="M+($a)"?></td>
	<td><?=$memAdd?></td>
</tr>
<tr>
	<td><?="M-($b)"?></td>
	<td><?=$memSub?></td>
</tr>
<tr>
	<td><?="MC"?></td>
	<td><?=$mem?></td>
</tr>

</table>
</body>
</html>
