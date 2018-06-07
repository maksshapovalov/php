<html>
<head>
<meta charset="utf-8">
<title>File Work</title>
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
<h3><?=$message;?></h3>
<?php endif;?>

<?php if (isset($text)):?>
<h3>Ваш файл</h3>
<?php foreach($text as $string) {?>
<?=$string;?></br>
<?php }?>
<h3><?=$stringNum?>-я строка</h3>
<?=$str;?>
<h3><?=$stringNum?>-я строка, <?=$charNum?>-й символ</h3>
<?=$char;?>
<h3>Заменяем <?=$stringNum?>-ю строку на <?=$strReplace?></h3>
<h3>Новая <?=$stringNum?>-я строка</h3>
<?=$new_str;?>
<h3>Заменяем в <?=$stringNum?>-й строке, <?=$charNum?>-й символ на <?=$chrReplace?></h3>
<h3><?=$stringNum?>-я строка, новый <?=$charNum?>-й символ</h3>
<?=$new_char;?>
<h3>Результат</h3>
<?php foreach($new_text as $string) {?>
<?=$string;?></br>
<?php }?>
<?php endif;?>
</body>
</html>
