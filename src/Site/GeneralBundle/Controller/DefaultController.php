<?php

namespace Site\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteGeneralBundle:Default:index.html.twig');
    }
}
