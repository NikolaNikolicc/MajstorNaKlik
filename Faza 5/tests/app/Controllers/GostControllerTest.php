<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

class GostControllerTest extends CIUnitTestCase
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
        $output = $this->controller(\App\Controllers\Gost::class)
            ->execute('getAuthorSession');

        $this->assertTrue($output->isOK());
    }

    /**
     * Za logovanje gosta na sajt
     * 
     * @return Response
     */
    public function testLoginSubmit() {
        $output = $this->controller(\App\Controllers\Gost::class)
            ->execute('loginSubmit');

        $this->assertTrue($output->isOK());
    }
	
	    /**
     * test funkcije register
     */
    public function testRegister()
    {
        $result = $this->controller(\App\Controllers\Gost::class)->execute("register");
        $this->assertTrue($result->isOk());
        $this->assertStringContainsString($result->getActualOutputForAssertion(), "Registruj se kao:");
    }
    
    /**
     * test funkcije majstorRegistration
     */
    public function testMajstorRegistration()
    {
        $params["Ime"] = "Milan";
        $params["Prezime"] = "Rakic";
        $params["Lozinka"] = "milance123";
        $params["Telefon"]= "+381-64-261-0703";
        $params["MejlAdresa"]= "milance@gmail.com";
        $params["KorisnickoIme"] = "milance";
        $params["IdGra"] = "21";
        $params['poruka'] = "Izaberite svoju specijalnost!";
        
        $result = $this->controller(\App\Controllers\Gost::class)->execute("majstorRegistration", $params);
        $this->assertTrue($result->isOk());
        $this->assertStringContainsString($result->getActualOutputForAssertion(), "Odaberi svoje specijalnosti:");
        $this->assertStringContainsString($result->getActualOutputForAssertion(), "Milan");
    }
}
