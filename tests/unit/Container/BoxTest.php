<?php
/**
 */
namespace SchrodingerTest\Container\BoxTest;

use Schrodinger\Container\Box;
use Schrodinger\Critter\Cat;

class BoxTest extends \PHPUnit_Framework_TestCase
{
    protected $box;
    protected $critter;


    public function setUp()
    {
        $critter = new Cat();
        $box = new Box($critter);
    }
}
