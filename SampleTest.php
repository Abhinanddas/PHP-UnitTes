<?php

require_once('SampleClass.php');
use PHPUnit\Framework\TestCase;


class SampleTest extends TestCase{

    private $sampleObject;

    protected function setUp(): void{
        $this->sampleObject = new SampleClass();
     }
    protected function tearDown(): void{ 
        $this->sampleObject =null;
    }

    public function testGetBoolean(){
        $booleanVal = $this->sampleObject->getBoolean();
        $this->assertTrue($booleanVal !== false);
    }

    public function testGetNumber(){
        $numberVal = $this->sampleObject->getNumber();
        $this->assertEquals($numberVal,10);
    }

    public function testGetSting(){

        $stringVal = $this->sampleObject->getString();
        $this->assertEquals($stringVal,"Poda");
    }
}

?>

