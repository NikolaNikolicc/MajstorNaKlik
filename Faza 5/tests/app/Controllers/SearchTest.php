<?php
use PHPUnit\Framework\TestCase;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;


class SearchTest extends CIUnitTestCase{

    use ControllerTestTrait;

    public function testSearch(){
        $result = $this->controller(\App\Controllers\Gost::class)->execute("search");
        $this->assertTrue($result->isOk());
        $this->assertStringContainsString($result->getActualOutputForAssertion(), "Svi majstori:");
    }

    
}
?>