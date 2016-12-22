<?php

namespace Site\FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\FormBundle\Form\PostType;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteFormBundle:Default:index.html.twig');
    }
    public function createAction()
    {
        $entitymanager = $this->getDoctrine()->getEntityManager();
        $form = $this->createform(new PostType());
        return $this->render('SiteFormBundle:Default:create.html.twig', array(
          'form' => $form->createView(),
        ));
    }
    public function updateAction()
    {
        return $this->render('SiteFormBundle:Default:update.html.twig');
    }
    public function deleteAction()
    {
        return $this->render('SiteFormBundle:Default:delete.html.twig');
    }
}
