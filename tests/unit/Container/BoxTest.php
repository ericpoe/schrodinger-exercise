<?php
/**
 */

namespace SchrodingerTest;

use Schrodinger\Container\Box;

class BoxTest extends \PHPUnit_Framework_TestCase
{
    protected $box;

    public function setUp()
    {
        $this->box = new Box();
    }

    public function testBoxInteriorIsObservable()
    {
        $this->assertTrue($this->box->isObservable());
    }
}
