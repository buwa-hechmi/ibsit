<?php

namespace questionnaire\QuestionnaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('questionnaireQuestionnaireBundle:Default:index.html.twig', array('name' => $name));
    }
}
