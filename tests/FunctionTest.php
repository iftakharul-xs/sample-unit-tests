<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase{
    public function testCorrectSum(){

        require_once 'functions.php';
        $this->assertEquals(10,add(5,5));
        $this->assertNotEquals(11,add(5,5));
    }
}