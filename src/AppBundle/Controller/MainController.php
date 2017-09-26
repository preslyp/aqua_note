<?php
/**
 * Created by PhpStorm.
 * User: pancho
 * Date: 9/26/17
 * Time: 2:19 PM
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{

    public function homepageAction()
    {return $this->render("main/homepage.html.twig");
    }

}