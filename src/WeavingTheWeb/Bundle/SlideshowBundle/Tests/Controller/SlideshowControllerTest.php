<?php

namespace WeavingTheWeb\Bundle\SlideshowBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SlideshowControllerTest extends WebTestCase
{
    /**
     * @group slideshow
     */
    public function testHomepageAction()
    {
        $client = static::createClient();

        $client->request('GET', '/');
        $response = $client->getResponse();

        $expectedStatusCode = 302;

        if ($response->getStatusCode() !== $expectedStatusCode) {
            $errorOutput = $response->getContent();
        } else {
            $errorOutput = "";
        }

        $this->assertEquals($expectedStatusCode, $response->getStatusCode(), $errorOutput);
    }

    /**
     * @group slideshow
     */
    public function testStartAction()
    {
        $client = static::createClient();

        $client->request('GET', '/show');
        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
    }
}
