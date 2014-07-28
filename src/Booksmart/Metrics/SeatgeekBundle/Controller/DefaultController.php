<?php

namespace Booksmart\Metrics\SeatgeekBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function eventsSearchAction()
    {
    	$form = $this->createFormBuilder()
   			->add('location', 'text')
   			->add('search', 'submit')
   			->getForm();

        return $this->render('BooksmartMetricsSeatgeekBundle:Default:eventsSearch.html.twig', array(
        		'form' => $form->createForm();
        	));
    }
}
