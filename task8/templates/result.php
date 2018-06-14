<?php if ($data['message']!==true):?>
	<h3><?=$data['message'];?></h3>
<?php endif;?>

<?php if ($data['search']):?>
	<?php foreach($data['search'] as $result):?>
		<?php if (isset($result['href'])):?>
			<h4><a href="<?=$result['href'];?>"><?=$result['href_title'];?></a></h4>
			<cite style="color: #006621"><?=$result['cite'];?></cite>
			<p><?=$result['span'];?></p>
		<?php endif;?>
	<?php endforeach ?>
<?php endif;?>

<?php if ($data['response']['error']):?>
	Упс...
<?php endif;?>
