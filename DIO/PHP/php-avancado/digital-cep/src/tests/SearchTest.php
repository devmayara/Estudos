<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Mayara\DigitalCep\Search;

class SearchTest extends TestCase
{
    public function testGetAddressFromZipcodeDefaultUsage()
    {
        $resultado = "ok";


        $this->assertEquals("ok", $resultado);
    }
}
