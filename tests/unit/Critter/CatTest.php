<?php
/**
 */

use Schrodinger\Critter\Cat;


class CatTest extends \PHPUnit_Framework_TestCase {
    protected $cat;
    function setUp() {
        $this->cat = new Cat();
    }

    function testIsNewCatAlive() {
        $this->assertTrue($this->cat->isAlive());
    }
    function testCatHasNineLives() {
        /** Run through 8 lives */
        for($i=0; $i < 8; $i++){
            $this->cat->kill();
            $this->assertTrue($this->cat->isAlive());
        }
        /** Kill the cat once and for all */
        $this->cat->kill();
        $this->assertFalse($this->cat->isAlive());
    }
}