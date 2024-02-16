<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

class AdministratorControllerTest extends CIUnitTestCase
{
    use ControllerTestTrait;
    use DatabaseTestTrait;

    /**
     * vraca vrednosti author iz sesije
     * 
     * @return JSON file
     */
    public function testGetAuthorSession()
    {
        $output = $this->controller(\App\Controllers\Administrator::class)
            ->execute('getAuthorSession');

        $this->assertTrue($output->isOK());
    }


    /**
     * Odjavljivanje ulogovane uloge
     * 
     * @return Response
     */
    public function testLogout(){
        $output = $this->controller(\App\Controllers\Administrator::class)
            ->execute('logout');

        $this->assertTrue($output->isOK());
        $this->assertTrue($output->isRedirect());
        $this->assertEquals(site_url(), $output->getRedirectURL());
    }
}
