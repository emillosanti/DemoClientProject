<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }

    public function testCategory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/category');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('New Category', $crawler->filter('h1')->text());
        $this->assertContains('Category description', $crawler->filter('p')->text());
    }
}
