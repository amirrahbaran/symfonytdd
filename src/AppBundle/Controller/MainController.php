<?php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class MainController
 * @package AppBundle\Controller
 */
class MainController extends Controller
{
    /**
     * @Route("/contact")
     * @return Response
     */
    public function contactAction()
    {
        return $this->render('main/contact.html.twig', array('Email' => 'Test Mail'));
    }


    /**
     * @Route("/about")
     * @return Response
     */
    public function aboutAction()
    {
        return $this->render('main/about.html.twig', array("ArticleName" => "Testing"));
    }
}