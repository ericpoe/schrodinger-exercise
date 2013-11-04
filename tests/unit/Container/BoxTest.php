<?php
/**
 * User: eric
 * Date: 10/11/13
 */

use Schrodinger\Container\Box;
use Schrodinger\Critter\Cat;

class BoxTest extends \PHPUnit_Framework_TestCase
{
    function testCreateBox()
    {
        $box = new Box();
    }

    function testCreateBoxWithCritter(){
        $critter = new Cat();
        $box2 = new Box($critter);
    }
}
