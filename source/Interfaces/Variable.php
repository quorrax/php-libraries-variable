<?php

namespace Quorrax\Interfaces;

interface Variable
{
    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variable
     */
    public function getType($return = Variable::class);

    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param mixed $value
     */
    public function __construct($value = null);
}
