<?php
/**
 */
namespace ShrodingerTest\Critter\CatTest;

use Schrodinger\Critter\Cat;

class CatTest extends \PHPUnit_Framework_TestCase
{
    protected $cat;

    public function setUp()
    {
        $this->cat = new Cat();
    }

    public function testIsNewCatAlive()
    {
        $this->assertTrue($this->cat->isAlive());
    }

    public function testCatHasNineLives()
    {
        /** Run through 8 lives */
        for ($i=0; $i < 8; $i++) {
            $this->cat->kill();
            $this->assertTrue($this->cat->isAlive());
        }
        /** Kill the cat once and for all */
        $this->cat->kill();
        $this->assertFalse($this->cat->isAlive());
    }

    public function testCatMoodBasedOnLivesLeft()
    {
        $mood = [
            "loving",
            "amorous",
            "happy",
            "crazy",
            "cool",
            "grumpy",
            "irritated",
            "angry",
            "afraid",
            "disappointed"
        ];

        for ($i = 0; $i < 10; $i++) {
            // Don't kill the cat before we have a chance to gauge its mood.
            if ($i > 0) {
                $this->cat->kill();
            }
            $this->assertEquals($mood[$i], $this->cat->getMood());
        }
    }
}
