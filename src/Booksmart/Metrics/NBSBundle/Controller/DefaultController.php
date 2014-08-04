<?php

namespace Booksmart\Metrics\NBSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Booksmart\Metrics\SoundcloudBundle\Entity\Search;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
    	$search = new Search;
    	$form = $this->createFormBuilder($search)
    		->add('query', 'text')
    		->add('Go', 'submit')
    		->getForm();

    	$form->handleRequest($request);

    	if($form->isValid()){

    		$artists = json_decode(file_get_contents('http://dylanpierce.api3.nextbigsound.com/artists/search.json?q=' . $search->getQuery()));
            
    		return $this->render('BooksmartMetricsNBSBundle:Artist:results.html.twig', array(
    			'form' => $form->createView(),
    			'artists' => $artists,
    			));
    		
    	} else {

    		return $this->render('BooksmartMetricsNBSBundle:Default:index.html.twig',array(
        		'form' => $form->createView()
        ));
    	}

    }
}
