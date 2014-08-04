<?php
namespace Booksmart\Metrics\EchonestBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Echonest extends Controller {

	private $api_key;

	private $consumer_key;

	private $shared_secret;

	private $nameQuery = null;

	private $genreQuery = null;

	private $resultsQuery = null;

	private $base_url = 'http://developer.echonest.com/api/v4/artist/search?';

	private $url_extention;

	function __construct($api_key)
	{
		$this->api_key = $api_key;
	}

	public function name($query){

		$this->artistQuery = '&name=' . urlencode($query);

		return $this;
	}

	public function genre($query){

			$this->genreQuery = '&genre=' . urlencode($query);

			return $this;
	}

	public function results($query){

			$this->resultsQuery = '&results=' . strval($query);

			return $this;
	}

	public function search(){

		try {

			$queryUrl = $this->base_url . 'api_key=' . $this->api_key . '&format=json' . $this->nameQuery . $this->resultsQuery .  $this->genreQuery;
			$response = file_get_contents($queryUrl);
			$json = json_decode($response);

		} catch (Exception $e) {
			echo 'Message: ' . $e->getMessage();
		}
		return $json;
	}

	public function manualSearch($url){
		$response = file_get_contents($url);
		$json = json_decode($response);

		return $json;
	}
}