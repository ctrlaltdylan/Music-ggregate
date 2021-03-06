<?php

namespace Booksmart\Metrics\SeatgeekBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function eventsSearchAction(Request $request)
    {
    	$form = $this->createFormBuilder()
   			->add('location', 'text')
   			->add('radius', 'text')
   			->add('search', 'submit')
   			->getForm();

   		
   		$form->handleRequest($request);
   		  if ($request->getMethod() == 'POST') {
		    //$form->submit($request);
		    // data is an array with "name", "email", and "message" keys
		    $data = $form->getData();

		    $location = $data['location'];
		    $radius = $data['radius'];
        //$date_range = $data['date_range'];
		   
		    $geocodeResponse = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($location) . '&key=AIzaSyCo9JrEfU3bw-yHQymgbzAnVvwy-WCmchM'));

		    $lat = $geocodeResponse->results[0]->geometry->location->lat;
		    $lng = $geocodeResponse->results[0]->geometry->location->lng;

   			$response = json_decode(file_get_contents('http://api.seatgeek.com/2/events?per_page=200'. '&lat='.$lat  . '&lon=' . $lng . '&range='.$radius.'mi'));

	        return $this->render('BooksmartMetricsSeatgeekBundle:Default:eventsResult.html.twig', array(
        		'form' => $form->createView(),
        		'events' => $response->events,
        		'lat'    => $lat,
        		'lng'	 => $lng
        	));	

		  } else {

		  	 return $this->render('BooksmartMetricsSeatgeekBundle:Default:eventsSearch.html.twig', array(
        		'form' => $form->createView(),
        		
        	));
		  }
    }
}
