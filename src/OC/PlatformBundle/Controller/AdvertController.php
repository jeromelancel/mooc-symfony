<?php
/**
 * Created by PhpStorm.
 * User: jerom
 * Date: 13/03/2018
 * Time: 18:53
 */

namespace OC\PlatformBundle\Controller;


use Symfony\Component\HttpFoundation\Response;

class AdvertController
{
    public function indexAction()
    {
        return new Response("Notre propre hello World");
    }
}