<?php
/**
 * Cat
 * Each Cat has 9 lives and her mood is dependent upon how many lives she has remaining. The Cat is able to vocalize
 * each mood with clarity, if one knows how to listen. Although it is difficult to kill a Cat,
 * it can be done with a little curiosity and persistence.
 */

namespace Schrodinger\Critter;

use Schrodinger\CritterI;

class Cat implements CritterI
{
    protected $alive;
    protected $lifeCount;
    protected $mood = ["disappointed", "afraid", "angry", "irritated", "grumpy", "cool", "crazy", "happy",
        "amorous", "loving"];

    /**
     * Empty Constructor
     * When the Cat is created, it must be alive and must have all 9 lives intact.
     */
    public function __construct()
    {
        $this->alive = true;
        $this->lifeCount = 9;
    }

    /**
     * isAlive
     * Determines if the Cat is alive or not.
     * @return bool state of life
     */
    public function isAlive()
    {
        return $this->alive;
    }

    /**
     * getMood
     * Mood is dependent upon how many lives remain.
     * 9 lives: loving
     * 8 lives: amorous
     * 7 lives: happy
     * 6 lives: crazy
     * 5 lives: cool
     * 4 lives: grumpy
     * 3 lives: irritated
     * 2 lives: angry
     * 1 life:  afraid
     * 0 lives: disappointed
     *
     * @return mixed mood based on remaining lives
     */
    public function getMood()
    {
        return $this->mood[$this->lifeCount];
    }

    public function kill()
    {
        if ($this->alive) {
            $this->lifeCount--;
        }
        if ($this->lifeCount == 0) {
            $this->alive = false;
        }
    }


    /**
     * speak
     * The manner in which a Cat speaks is entirely dependent upon its mood.
     * Loving: "meow"
     * Amorous: "me yow!"
     * Happy: "purr"
     * Crazy: "Ack, Thbbft!"
     * Nonchalant: "..."
     * Grumpy: "Coffee or die()"
     * Irritated: "I ninja"
     * Angry: "Rrowr"
     * Afraid: "I can has cheeseburger?"
     * Disappointed: "Meh"
     */
    public function speak()
    {

    }
}
