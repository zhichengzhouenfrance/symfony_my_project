<?php

namespace Scourgen\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/page/{page_number}",requirements={"page_number"="\d+"})
     * @Template()
     */
    public function indexAction($page_number)
    {
        $content = "test";

        return array('page_number' => $page_number);
    }
}
