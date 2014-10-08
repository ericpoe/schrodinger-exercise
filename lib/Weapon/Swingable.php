<?php
/**
 * When a weapon is swingable, it is used by swinging at the end of a lever of some kind with one or more fulcrums
 * (fulcra).
 * @package Schrodinger
 */
namespace Schrodinger\Weapon;

interface Swingable
{
    public function attack(); // information about the swing
}
