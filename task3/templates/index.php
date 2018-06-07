<html>
<head>
<meta charset="utf-8">
<title>File Work</title>
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
