<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{
    public function testCorrectFirstName(){

        require_once 'User.php';
        $this->assertEquals("Ifat", (new User())->setFirstName('Ifat')->getFirstName() );
    }
    public function testCorrectLasstName(){

        $this->assertEquals("Islam", (new User())->setLastName('Islam')->getLastName() );
    }
    public function test_correct_full_name(){

        $this->assertEquals("Ifat Islam", (new User())->setFirstName('Ifat')->setSurname('Islam')->getFullName());
    }
    /**
     * @test
     */
    public function EmptyName(){

        $this->assertEquals("", (new User())->setFirstName('')->setSurname('')->getFullName());
    }
}