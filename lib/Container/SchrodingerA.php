<?php
/**
 *
 */

namespace Schrodinger\Container;


abstract class SchrodingerA
{
    /** This is a trinary boolean construct */
    const QUANTUM_FALSE = 0;
    const QUANTUM_TRUE = 1;
    const QUANTUM_TRUE_AND_FALSE = 2;

    //abstract protected function isObservable();
    abstract public function containsWeapon();
    abstract public function containsCritter();

    /**
     * The state of the Schrodinger container is either open or closed.
     * @return SchrodingerA an object that is now open or closed.
     */
    abstract public function changeState();

    /**
     * If the contents are observable, then describe them; otherwise, describe them to the best of our knowledge. In the
     * case of Schrodinger's Cat, the Cat is observed as being either alive or dead in an open box; yet, it is observed
     * as being both alive and dead in a closed box.
     * @return mixed CritterI status and WeaponI status.
     */
    abstract public function observeContents();
}
