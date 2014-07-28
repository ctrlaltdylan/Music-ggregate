<?php

namespace Booksmart\Metrics\EchonestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Booksmart\Metrics\SoundcloudBundle\Entity\Search;
use Booksmart\Metrics\EchonestBundle\Entity\Genre;
use Booksmart\Metrics\EchonestBundle\Entity\Artist;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function searchAction(Request $request)
    {
    	$search = new Search();

    	$form = $this->createFormBuilder($search)
    		->add('query', 'text')
    		->add('Go', 'submit')
    		->getForm();

    	$form->handleRequest($request);

    	if ($form->isValid()){

    		    $echonest = $this->get('echonest');

    			$results  = $echonest
    						->genre($search->getQuery())
    						->search();


	           return $this->render('BooksmartMetricsEchonestBundle:Default:results.html.twig', array(
	        			'results' => $results,
	        	));

    	} else {

    		return $this->render('BooksmartMetricsEchonestBundle:Default:search.html.twig', array(
    					'form' => $form->createView(),
    			));
    	}
    }

    public function populateGenresAction()
    {
    	$echonest = $this->get('echonest');

    	$responseJson = $echonest->manualSearch('http://developer.echonest.com/api/v4/genre/list?api_key=LEDCWJMNLCLWAGJEG&format=json&results=2000');
    	$em = $this->getDoctrine()->getManager();

    	foreach($responseJson->response->genres as $genre){
    		//save to database
    		$genreEntry = new Genre;
    		$genreEntry->setName($genre->name);
    		$em->persist($genreEntry);

    	}
    	$em->flush();

    	return $this->render('BooksmartMetricsEchonestBundle:Default:genrePopulation.html.twig', array(
    					'genres' => $responseJson->response->genres,
    	));
    }

    public function populateTopArtistsAction()
    {
        ini_set('max_execution_time', 30000);
    	$echonest = $this->get('echonest');

    	$repository = $this->getDoctrine()->getRepository('BooksmartMetricsEchonestBundle:Genre');
    	$em = $this->getDoctrine()->getManager();

    	$genres = $repository->findAll();

    	foreach($genres as $genre){

    		$artistJson = $echonest->genre($genre->getName())
    				 ->results(100)
    				 ->search();

    		foreach($artistJson->response->artists as $artist){
    			$artistEntry = new Artist;
    			$artistEntry->setName($artist->name);
    			$artistEntry->setEchonestId($artist->id);
                $genre->addArtist($artistEntry);
                $em->persist($artistEntry);
    			$em->persist($artistEntry);
    			$em->flush();
    		}
    	}
    }

    public function artistsAction()
    {
        $repository = $this->getDoctrine()->getRepository('BooksmartMetricsEchonestBundle:Artist');
        $artists = $repository->findAll();

        return $this->render('BooksmartMetricsEchonestBundle:Default:artists.html.twig', array(
                'artists'=> $artists,
            ));

    }
}
