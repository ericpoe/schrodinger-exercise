<?php
/**
 */

namespace Schrodinger;

interface Critter {
    public function isAlive();
    public function getMood();
    public function kill();
    public function speak();
}