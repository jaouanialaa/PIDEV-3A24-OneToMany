<?php

namespace EtablissementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EtablissementBundle:Default:index.html.twig');
    }
}
