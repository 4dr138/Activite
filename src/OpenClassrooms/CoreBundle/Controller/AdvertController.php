<?php

namespace OpenClassrooms\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction()
    {
        return $this->render('OpenClassroomsCoreBundle::layout.html.twig', array());
    }

    public function menuAction()
    {
        $listAdverts = array(
            array(
                'title' => 'Recherche développpeur Symfony',
                'id' => 1,
                'author' => 'Alexandre',
                'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
                'date' => new \Datetime()),
            array(
                'title' => 'Mission de webmaster',
                'id' => 2,
                'author' => 'Hugo',
                'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
                'date' => new \Datetime()),
            array(
                'title' => 'Offre de stage webdesigner',
                'id' => 3,
                'author' => 'Mathieu',
                'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
                'date' => new \Datetime())
        );
        return $this->render('OpenClassroomsCoreBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts,
        ));
    }

    public function contactAction()
    {
        $this->addFlash('info',"Message Flash : La page de contact n'est pas encore disponible, merci de revenir plus tard.");
        return $this->render('OpenClassroomsCoreBundle:Advert:contact.html.twig');
    }
}
