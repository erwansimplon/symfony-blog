<?php

namespace Site\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\ArticleBundle\Form\ArticleType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteArticleBundle:Default:index.html.twig');
    }
    public function createAction()
    {
      $entitymanager = $this->getDoctrine()->getEntityManager();
      $form = $this->createform(new ArticleType());
      return $this->render('SiteArticleBundle:Default:create.html.twig', array(
        'form' => $form->createView(),
      ));
    }
    public function updateAction()
    {
        return $this->render('SiteArticleBundle:Default:update.html.twig');
    }
    public function deleteAction()
    {
        return $this->render('SiteArticleBundle:Default:delete.html.twig');
    }
}
