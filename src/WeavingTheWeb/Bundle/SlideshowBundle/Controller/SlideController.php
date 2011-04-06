<?php

namespace WeavingTheWeb\Bundle\SlideshowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
	Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SlideController extends Controller
{
    /**
     * @Route("/show", name="weaving_the_web_slideshow")
     * @Template()
     */
    public function startAction()
    {
        return array();
    }

    /**
     * @Route("/", name="weaving_the_web_slideshow_redirect")
     * @Template()
     */
    public function redirectAction()
    {
        $router = $this->get('router');

        return new RedirectResponse($router->generate('weaving_the_web_slideshow'));
    }
}
