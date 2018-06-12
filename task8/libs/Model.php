<?php 
use Symfony\Component\DomCrawler\Crawler;

class Model
{
	private $data;
	
	
	public function __construct()
	{
		
	}
	
	public function setData($key, $val)
	{
		$this->data[$key] = $val;
		return true;
	}
	
	public function getData()
	{
		return $this->data;
	}
	
	public function checkForm()
	{
		if ($_POST['search'] != '')
		{
			return true;
		}
		else
		{
			$this->data['message'] = "Empty Field";
			return false;
		}
	}
	
	public function getSearchResult($text)
	{
		$response = $this->curlGetContents('https://www.google.com/search?q='.$text.'&oq='.$text);
		if ('' == $response['errors'])
		{
			return $response['errors'];
		}
		//$response['html'] = file_get_contents('https://www.google.com/search?q='.$text.'&oq='.$text);
		file_put_contents('google.txt', $response['html']);
		return $this->getSearch($response['html']);
	}
	
	private function curlGetContents($page_url) 
	{
		$error_page = array();
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/5.0)");   
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // Автоматом идём по редиректам
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // Не проверять SSL сертификат
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // Не проверять Host SSL сертификата
		curl_setopt($ch, CURLOPT_URL, $page_url); // Куда отправляем
		curl_setopt($ch, CURLOPT_HEADER, 0); 
		curl_setopt($ch, CURLOPT_REFERER, "http://www.google.com/"); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Возвращаем, но не выводим на экран результат
		$response['html'] = curl_exec($ch);
		$info = curl_getinfo($ch);
		if($info['http_code'] != 200 && $info['http_code'] != 404)
		{
			$error_page[] = array(1, $page_url, $info['http_code']);
		}
		$response['code'] = $info['http_code'];
		$response['errors'] = $error_page;
		curl_close($ch);
		return $response;
	}
	
	private function crawler($page) 
	{
		return new Crawler($page);
	}
	
	private function getSearch($page)
	{
		$crawler = $this->crawler($page);
		return $crawler
			->filter('div.g')
			->each(function (crawler $divG) {
				return [
					'href_title' => $divG->filter('a')->text(),
					'href' => $divG->filter('a')->attr('href'),
					'cite' => $divG->filter('span')->text()
				];
			});
	}

	
}
