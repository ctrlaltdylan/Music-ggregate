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

	    	$results = json_decode($yelp->search($query, 'Philadephia, PA'));

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
