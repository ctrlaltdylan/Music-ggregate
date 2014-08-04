<?php

namespace Booksmart\Hospitality\YelpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
    	$form = $this->createFormBuilder()
    		->add('query', 'text')
    		->add('search', 'submit')
    		->getForm();

    	$form->handleRequest($request);

    	if ($request->getMethod() == 'POST') {

	    	$query = $request->query->get('query');

	    	$yelp = $this->get('Yelp');
	    	$geocoder = $this->get('Geocode');

	    	$results = json_decode($yelp->search($query, 'Philadephia, PA'), true);

	    	foreach($results['businesses'] as $business){
	    		$geocodes = $geocoder->geocode($business['location']['address'][0] . ' ' . $business['location']['city'] . ' ' . $business['location']['country_code']);
	    		$business[] = array('lat' => $geocodes['lat']);
	    		$business[] = array('lng' => $geocodes['lng']);
	    	}

            return $this->render('BooksmartHospitalityYelpBundle:Default:results.html.twig', array(
            		'results' => $results,
        			'form' => $form->createView(),
        	));
    	} else {
	        return $this->render('BooksmartHospitalityYelpBundle:Default:index.html.twig', array(
	        			'form' => $form->createView(),
	        	));
    	}
    }
}
