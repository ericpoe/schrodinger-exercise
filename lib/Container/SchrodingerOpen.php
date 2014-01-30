<?php
/**
 * Created by PhpStorm.
 * User: ericpoe
 * Date: 11/26/13
 * Time: 11:43 AM
 */

namespace Schrodinger\Container;

class SchrodingerOpen extends SchrodingerA
{
    protected $critter;

    public function changeState()
    {
        return SchrodingerClosed($this);
    }

    public function __construct(CritterI $critter)
    {
        $this->critter = $critter;
    }
}
