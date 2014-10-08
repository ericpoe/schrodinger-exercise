<?php
/**
 */

namespace Schrodinger\Critter;

interface CritterI
{
    public function isAlive();
    public function getMood();
    public function kill();
    public function speak();
}
