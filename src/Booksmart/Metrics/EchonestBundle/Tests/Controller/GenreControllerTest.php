<?php

namespace Booksmart\Metrics\EchonestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GenreControllerTest extends WebTestCase
{
    public function testPopulate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/populate');
    }

    public function testSearch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/search');
    }

    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

}
