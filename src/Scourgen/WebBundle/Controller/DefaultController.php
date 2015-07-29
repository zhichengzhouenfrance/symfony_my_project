<?php

namespace Scourgen\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/login")
     * @Template()
     */
    public function indexAction()
    {
        $content = "test";

        return array('content' => $content);
    }
}
