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

    public function testCatMoodOnNineLivesIsLoving()
    {
        $this->assertEquals("loving", $this->cat->getMood());
    }

    public function testCatMoodOnEightLivesIsAmorous()
    {
        for ($i = 0; $i < 1; $i++) {
            $this->cat->kill();
        }
        $this->assertEquals("amorous", $this->cat->getMood());
    }

    public function testCatMoodOnSevenLivesIsHappy()
    {
        for ($i = 0; $i < 2; $i++) {
            $this->cat->kill();
        }
        $this->assertEquals("happy", $this->cat->getMood());
    }

    public function testCatMoodOnSixLivesIsCrazy()
    {
        for ($i = 0; $i < 3; $i++) {
            $this->cat->kill();
        }
        $this->assertEquals("crazy", $this->cat->getMood());
    }

    public function testCatMoodOnFiveLivesIsNonchalant()
    {
        for ($i = 0; $i < 4; $i++) {
            $this->cat->kill();
        }
        $this->assertEquals("nonchalant", $this->cat->getMood());
    }

    public function testCatMoodOnFourLivesIsGrumpy()
    {
        for ($i = 0; $i < 5; $i++) {
            $this->cat->kill();
        }
        $this->assertEquals("grumpy", $this->cat->getMood());
    }

    public function testCatMoodOnThreeLivesIsIrritated()
    {
        for ($i = 0; $i < 6; $i++) {
            $this->cat->kill();
        }
        $this->assertEquals("irritated", $this->cat->getMood());
    }
}
