<html>
<head>
<meta charset="utf-8">
<title>Interfaces</title>
</head>
<body>

<div>
	Запросим поле name: <?=$getSessionNameStart?><br>
	Создадим в сессии поле name: <?=$getSessionName?><br>
	Удалим это поле и снова запросим: <?=$getSessionNameEnd?><br>
	<br>

	Создадим в куки поле name и выведем его<br>
	<?=$getCookieName?><br>
	Удалим это поле<br>
	
</div>
</body>
</html>