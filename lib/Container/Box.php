<?php
/**
 * Box.
 * A Box is the most basic form of a Schrodinger Container.
 * @package Schrodinger
 */

namespace Schrodinger\Container;

class Box implements SchrodingerI
{
    protected $boxIsObservable;

    public function __construct()
    {
        $this->boxIsObservable = true;
    }

    public function isObservable()
    {
        return $this->boxIsObservable;
    }

    public function containsCritter()
    {

    }

    public function containsWeapon()
    {

    }
}
