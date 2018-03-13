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


    public function viewAction($id)
    {
        return new Response("Affichage de l'annonce d'id : ".$id);
    }

    // ... et la méthode indexAction que nous avons déjà créée
    public function indexAction()
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig',array('nom'=>'Jérôme'));
        return new Response($content);
    }

    public function viewSlugAction($slug, $year, $format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    }
}