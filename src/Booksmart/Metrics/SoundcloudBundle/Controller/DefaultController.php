<?php

namespace Booksmart\Metrics\SoundcloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

use Booksmart\Metrics\SoundcloudBundle\Entity\Search;
use Booksmart\Metrics\SoundcloudBundle\Form\SearchType;

use Booksmart\Metrics\SoundcloudBundle\Entity\Track;


class DefaultController extends Controller
{
    public function indexAction($name)
    {

        return $this->render('BooksmartMetricsSoundcloudBundle:Default:index.html.twig', array('name' => $name));
    }

    public function searchAction(Request $request)
    {
    	$search = new Search;
    	$form = $this->createForm(new SearchType(), $search);

    	$scClient = $this->get('soundcloudservice');

    	$form->handleRequest($request);

    	if($form->isValid()){
    		//succeeded
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($search);



    		$scTracks = $scClient->get('tracks', array('q' => $search->getQuery() ));
    		$scTracks = json_decode($scTracks);

            $track = new Track;
    		$soundcloud = $this->get('soundcloud');

        foreach($scTracks as $scTrack){

    		try {
    			$track = $soundcloud->save('track', $scTrack, $em, $track);
                $track->setSearch($search);
                $em->persist($track);
    		} catch (Exception $e) {
    			echo "Uncaught Exception ", $e->getMessage(), '\n';
    		}

            $em->flush();
        }

    		return $this->render('BooksmartMetricsSoundcloudBundle:Default:results.html.twig', array(
    					'searchForm' => $form->createView(),
    					'tracks' 	 => $scTracks,
    			));
    	} else {
    		//failed

    		return $this->render('BooksmartMetricsSoundcloudBundle:Default:search.html.twig', array(
    					'errors' => 'invalid search term',
    					'searchForm' => $form->createView(),
    			));
    	}

    	return $this->render('BooksmartMetricsSoundcloudBundle:Default:search.html.twig');
    }


    public function tracksAction()
    {
        $repository = $this->getDoctrine()
                            ->getRepository('BooksmartMetricsSoundcloudBundle:Track');
        $tracks = $repository->findAll();
        $tracksCount = count($tracks);

        return $this->render('BooksmartMetricsSoundcloudBundle:Default:tracks.html.twig', array(
                    'tracks' => $tracks,
                    'tracksCount' => $tracksCount,
            ));
    }
}
