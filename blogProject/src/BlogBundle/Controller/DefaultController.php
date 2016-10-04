<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		/*$name = 'eric';
        return $this->render('BlogBundle:Default:index.html.twig',array('name'=>$name));*/

        $em = $this->getDoctrine()
            ->getEntityManager();

        $blogs = $em->getRepository('BlogBundle:Blog')
            ->getLatestBlogs();

        return $this->render('BlogBundle:Default:index.html.twig', array(
            'blogs' => $blogs
        ));
    }
    
     public function aboutAction()
    {
        return $this->render('BlogBundle:Default:about.html.twig');
    }
}
