<?php
require_once ('../task8/vendor/autoload.php');
use Symfony\Component\DomCrawler\Crawler;

$page = file_get_contents('index.html');

function crawler($page) 
	{
		return new Crawler($page);
	}

function getSearch($page)
	{
		$crawler = crawler($page);
		return $crawler
			->filter('.example-contents')
			->each(function (crawler $example) 
			{
				return $example->filter('.programlisting')->text();
			});
	}
	$result = getSearch($page);
	foreach ($result as $class)
	{
		$i++;
		preg_match('#<?php\nclass (.+?) #is', $class, $className);
		if (6==$i) $className[1] = 'DataTest';
		if (57==$i) $className[1] = 'SomeFile';
		file_put_contents("tests/Example$i".'_'."$className[1].php",$class);
		chmod("tests/Example$i".'_'."$className[1].php", 0777);
				
	}
	
?>