<?php
use PHPUnit\Framework\TestCase;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;

class PregledProfilaTest extends CIUnitTestCase{

    use ControllerTestTrait;

    public function testPrikaziProfilMajstora(){
        $result = $this->controller(\App\Controllers\Gost::class)->execute("prikazProfilaMajstora");
        $this->assertTrue($result->isOk());
        $this->assertStringContainsString($result->getActualOutputForAssertion(), "Pregled profila majstora:");
    }

    public function testPrikaziProfilKorisnika(){
        $result = $this->controller(\App\Controllers\Gost::class)->execute("prikazProfilaMajstora");
        $this->assertTrue($result->isOk());
        $this->assertStringContainsString($result->getActualOutputForAssertion(), "Pregled profila korisnika:");
    }
}
?>