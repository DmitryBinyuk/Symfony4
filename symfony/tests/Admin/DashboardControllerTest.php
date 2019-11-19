<?php

namespace App\Tests\Admin;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DashboardControllerTest extends WebTestCase
{
    public function testShowDashboard()
    {
        $client = static::createClient(
        	[],
        	[
        		'PHP_AUTH_USER' => 'testUser@gmail.com',
    			'PHP_AUTH_PW'   => 'Test123',
        	]
        );

        $client->request('GET', '/admin');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testShowDashboard1()
    {
        // $client = static::createClient();

        $client = static::createClient(
        	[],
        	[
        		'PHP_AUTH_USER' => 'testUser@gmail.com',
    			'PHP_AUTH_PW'   => 'Test123',
        	]
        );

        $client->request('GET', '/admin');

        $this->assertContains(
		    'Admin panel',
		    $client->getResponse()->getContent()
		);
    }
}