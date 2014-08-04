<?php

namespace Booksmart\Metrics\EchonestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Booksmart\Metrics\SoundcloudBundle\Entity\Search;
use Booksmart\Metrics\EchonestBundle\Entity\Genre;
use Booksmart\Metrics\EchonestBundle\Entity\Artist;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GenreController extends Controller
{
    public function populateAction()
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

    public function searchAction(Request $request)
    {
        $name = $request->query->get('name');
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery("
            SELECT g.name
            FROM BooksmartMetricsEchonestBundle:Genre g
            WHERE g.name LIKE :name_like
            ");
        $query->setParameter('name_like', $name . '%');

        $genres = $query->getResult();

        return new Response(json_encode($genres));
    }

    public function indexAction()
    {
        return $this->render('BooksmartMetricsEchonestBundle:Genre:index.html.twig', array(
                // ...
            ));    }

}
