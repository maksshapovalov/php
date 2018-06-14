
<?php if ($data):?>
	<?php foreach($data as $result):?>
		<?php if (isset($result['href'])):?>
			<h4><a href="<?=$result['href'];?>"><?=$result['href_title'];?></a></h4>
			<cite style="color: #006621"><?=$result['cite'];?></cite>
			<p><?=$result['span'];?></p>
		<?php endif;?>
	<?php endforeach ?>
<?php endif;?>