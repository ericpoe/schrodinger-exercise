<?php
/**
 * Created by PhpStorm.
 * User: ericpoe
 * Date: 11/26/13
 * Time: 11:30 AM
 */

namespace Schrodinger\Container;


class SchrodingerClosed extends SchrodingerA
{
    /**
     * @return SchrodingerA|void
     */
    public function changeState()
    {
        return new SchrodingerOpen($this);
    }
}
