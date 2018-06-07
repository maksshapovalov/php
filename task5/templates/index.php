<html>
<head>
<meta charset="utf-8">
<title>Interfaces</title>
</head>
<body>
<div style="float:right; color:#FA6969">
	<?php if ($message):?>
	<h3>Error: <?=$message;?></h3>
	<?php endif;?>
</div>
<div>
	Создадим в сессии поле name и выведем его<br>
	<?=$getSessionName?><br>
	Удалим это поле<br>
	
	Создадим в куки поле name и выведем его<br>
	<?=$getCookieName?><br>
	Удалим это поле<br>
	
</div>
</body>
</html>