<?php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LuckyController extends Controller
{
    /**
     * @Route("/show/lucky/number")
     * @return Response
     */
    public function showSimpleLuckyNumberAction()
    {
        $number = rand(0,100);
        return $this->render('lucky/number.html.twig', array('luckyNumber' => $number));
    }


    /**
     * @Route("/show/json/lucky/number")
     * @return Response
     */
    public static function showJsonLuckyNumberAction()
    {
        $data = array(
            'lucky_number' => rand(0, 100)
        );
        return new JsonResponse($data);
    }


    /**
     * @Route("/show/lucky/numbers/{count}")
     * @param $count
     * @return Response
     */
    public function showLuckyNumbersAction($count)
    {
        $numbers = array();
        for ( $i = 0; $i < $count; $i++ ) {
            array_push($numbers, rand(0,100));
        }
        $numberList = join(",", $numbers);
        return $this->render('lucky/number.html.twig', array('luckyNumber' => $numberList));
    }


    /**
     * @Route("/show/json/lucky/numbers/{count}")
     * @param $count
     * @return Response
     */
    public static function showJsonLuckyNumbersAction($count)
    {
        $numbers = array();
        for ( $i = 0; $i < $count; $i++ ) {
            $numbers["element-".$i] = rand(0,100);
        }
        return new JsonResponse($numbers);
    }
}