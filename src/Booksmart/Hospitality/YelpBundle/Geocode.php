<?php

namespace Booksmart\Hospitality\YelpBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Geocode extends Controller 
{
	private $api_key;

	private $base_url = 'https://maps.googleapis.com/maps/api/geocode/json?';

	function __construct($api_key)
	{
		$this->api_key = $api_key;
	}

	public function geocode($address){

		$response =  json_decode(file_get_contents($this->base_url . 'address=' . urlencode($address)));
		$lng = $response->results[0]->geometry->location->lng;
		$lat = $response->results[0]->geometry->location->lat;

		return array('lat' => $lat, 'lng' => $lng);
	}
}