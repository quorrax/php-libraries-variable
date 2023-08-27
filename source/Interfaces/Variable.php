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
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variable
     */
    public function getValueAsBoolean($return = Variable::class);

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variable
     */
    public function getValueAsFloat($return = Variable::class);

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variable
     */
    public function isBoolean($return = Variable::class);

    /**
     * @param mixed $value
     */
    public function __construct($value = null);
}
