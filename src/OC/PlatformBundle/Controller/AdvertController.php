<?php
/**
 * Created by PhpStorm.
 * User: jerom
 * Date: 13/03/2018
 * Time: 18:53
 */

namespace OC\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller{
    public function indexAction()
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig',array('nom'=>'Jérôme'));
        return new Response($content);
    }
}