<?php

namespace SuiviBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SuiviBundle:Default:index.html.twig');
    }
}
