<?php


namespace App\Controller;
use PHPUnit\Framework\TestCase;

use App\Form\InscriptionType;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{

    /**
     * @dataProvider urlProvider
     */
    public function testInscription($url)
    {
        $client = self::createClient();
        $client->request('GET', $url);

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function urlProvider()
    {
        yield ['/'];
        yield ['/propos'];
        yield ['/connexion'];
        yield ['/inscription'];
        yield['/formWishlist'];
       
    }
}


