<?php
/**
 * SchrodingerI.
 * The Schrodinger is the basic container type for a black box that Erwin Schrodinger would have placed an unloved cat.
 * Its basic properties are 1. that its contents are not observable while the container is closed and are observable
 * while the container is open; 2. that it contains a weapon of some kind; and 3. that it can also contain a test
 * subject of some kind (aka a Critter).
 *
 * @package Schrodinger
 */

namespace Schrodinger;

interface SchrodingerI
{
    public function isObservable();
    public function containsWeapon();
    public function containsCritter();
}
