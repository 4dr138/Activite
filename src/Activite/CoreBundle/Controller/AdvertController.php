<?php

namespace Activite\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller
{
    public function indexAction()
    {
        // Notre liste d'annonce en dur
        $listAnnonces = array(
            array(
                'title'   => 'Recherche développpeur Symfony',
                'id'      => 1,
                'author'  => 'Alexandre',
                'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Mission de webmaster',
                'id'      => 2,
                'author'  => 'Hugo',
                'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Offre de stage webdesigner',
                'id'      => 3,
                'author'  => 'Mathieu',
                'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
                'date'    => new \Datetime())
        );

        return $this->render('ActiviteCoreBundle:Advert:index.html.twig', array(
            'listAnnonces' => $listAnnonces,
        ));
    }

    public function contactAction()
    {

        $this->addFlash('info', "Message Flash : La page de contact n'est pas encore disponible, merci de revenir plus tard.");

        return $this->render('ActiviteCoreBundle:Advert:contact.html.twig');

    }
}
