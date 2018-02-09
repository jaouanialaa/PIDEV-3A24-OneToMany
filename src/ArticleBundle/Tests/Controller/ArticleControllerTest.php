<?php

namespace ArticleBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticleControllerTest extends WebTestCase
{
    public function testAjouterarticle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AjouterArticle');
    }

    public function testModifierarticle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ModifierArticle');
    }

    public function testSupprimerarticle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/SupprimerArticle');
    }

    public function testAfficherarticles()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AfficherArticles');
    }

}
