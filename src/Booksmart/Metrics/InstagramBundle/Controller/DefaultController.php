<?php

namespace Booksmart\Metrics\InstagramBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
    	//access token
    	//1259789532.6f70da2.3309a99cd41f4663976bb0b2a17ce7fe
    	$form = $this->createFormBuilder()
   			->add('location', 'text')
   			->add('radius', 'text')
   			->add('search', 'submit')
   			->getForm();

   		
   		$form->handleRequest($request);
   		  if ($request->getMethod() == 'POST') {
		    // data is an array with "name", "email", and "message" keys
		    $data = $form->getData();

		    $location = $data['location'];
		    $radius = $data['radius'];
        //$date_range = $data['date_range'];
		   
		    $geocodeResponse = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($location) . '&key=AIzaSyCo9JrEfU3bw-yHQymgbzAnVvwy-WCmchM'));

		    $lat = $geocodeResponse->results[0]->geometry->location->lat;
		    $lng = $geocodeResponse->results[0]->geometry->location->lng;

		  $media = json_decode(file_get_contents('https://api.instagram.com/v1/locations/search?lat=' . $lat . '&lng=' . $lng . '&access_token=1259789532.6f70da2.3309a99cd41f4663976bb0b2a17ce7fe'));

        return $this->render('BooksmartMetricsInstagramBundle:Default:locationResultss.html.twig', array(
        			'media' => $media,
        			'lat'	=> $lat,
        			'lng'	=> $lng,
        			'form'	=> $form->createView()
        	));
    }
        else {
        	return $this->render('BooksmartMetricsInstagramBundle:Default:index.html.twig', array(
        			'form' => $form->createView(),
        		));
        }
    }
}
