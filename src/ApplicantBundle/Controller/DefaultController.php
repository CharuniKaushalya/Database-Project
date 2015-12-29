<?php

namespace ApplicantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicantBundle:Default:index.html.twig');
    }
}
