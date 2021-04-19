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
    
        public function addDataProviderForBoolean(){
            return array(
                array(1,2,true),
                array(19,1,true),
                array(-20,3,false)
            );
        }
    
        public function addDataProviderForNumber(){
            return array(
                array(1,2,3),
                array(10,20,30),
                array(1,-2,-1),
            );
        }
        public function addDataProviderForString(){
            return array(
                array("a","b","ab"),
                array("b","a","ba"),
                array("aa","b","aab"),
            );
        }
    /**
     * @dataProvider addDataProviderForBoolean
     */
    public function testGetBoolean($a,$b,$expected){
        $booleanVal = $this->sampleObject->getBoolean($a,$b);
        $this->assertTrue($booleanVal == $expected);
    }

    /**
     * @dataProvider addDataProviderForNumber
     */
    public function testGetNumber($a,$b,$expected){
        $numberVal = $this->sampleObject->getNumber($a,$b);
        $this->assertEquals($numberVal,$expected);
    }

    /**
     * @dataProvider addDataProviderForString
     */
    public function testGetSting($a,$b,$expected){

        $stringVal = $this->sampleObject->getString($a,$b);
        $this->assertEquals($stringVal,$expected);
    }
}
