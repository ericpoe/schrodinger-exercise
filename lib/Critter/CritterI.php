<?php
/**
 */

namespace Schrodinger;

interface CritterI
{
    public function isAlive();
    public function getMood();
    public function kill();
    public function speak();
}
