<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

class ChatControllerTest extends CIUnitTestCase
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
        $output = $this->controller(\App\Controllers\Chat::class)
            ->execute('getAuthorSession');

        $this->assertTrue($output->isOK());
    }


    /**
     * postavlja poruke na procitane
     * 
     * @return String - ACK
     */
    public function testSetReadMessages() {
        $output = $this->controller(\App\Controllers\Chat::class)
            ->execute('setReadMessages');

        $this->assertTrue($output->isOK());
        $this->assertIsString($output->getActualOutputForAssertion());
    }


    /**
     * vraca niz poruka koje su namenjene za autora ciji se id cita iz niza POST
     * posebna implementacija jer ne zelimo proveru za tekuci cet
     * 
     * @return JSON file
     */
    public function testCheckMessagesForAuthor(){
        $output = $this->controller(\App\Controllers\Chat::class)
            ->execute('checkMessagesForAuthor');

        $this->assertTrue($output->isOK());
        $this->assertIsString($output->getActualOutputForAssertion());
    }

    /**
     * menja status poruka autora na primljeno, pritom ne dirajuci procitane
     * 
     * @return String - ACK
     */
    public function testChangeStatusReceived(){
        $output = $this->controller(\App\Controllers\Chat::class)
            ->execute('changeStatusReceived');

        $this->assertTrue($output->isOK());
        $this->assertIsString($output->getActualOutputForAssertion());
    }

    /**
     *  salje zahtev za proveru pristiglih poruka za autora dok je u cetu
     * 
     * @return JSON file
    */    
    public function testGetNewMessages(){
        $output = $this->controller(\App\Controllers\Chat::class)
            ->execute('getNewMessages');

        $this->assertTrue($output->isOK());
        $this->assertIsString($output->getActualOutputForAssertion());
    }
    
}
