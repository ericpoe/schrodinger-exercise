<?php
/**
 * WeaponI
 * A weapon can be used to kill, maim, or deflect. Weapons are either lethal or non-lethal; however, all weapons are
 * lethal to some degree since just about everything is dangerous: a leaf does not seem all that dangerous until you
 * realize it's from the beautiful, yet toxic, oleander plant.
 *
 * @package Schrodinger
 */

namespace Schrodinger\Weapon;

interface WeaponI
{
    public function prepare(); // get the weapon ready for releasing
    public function release(); // release (fire, shoot, swing, etc) the weapon
}
