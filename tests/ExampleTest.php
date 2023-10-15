<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase{
    public function testAddTwoPlusTwoIsFour(){
        
        $this->assertEquals(4,2+2);

    }
    public function testTwoPlusFiveIsSeven(){
      
        $this->assertEquals(7,2+5);

    }
}