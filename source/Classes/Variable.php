<?php

namespace Quorrax\Classes;

use InvalidArgumentException;
use Quorrax\Interfaces\Variable as VariableInterface;
use UnexpectedValueException;

class Variable implements VariableInterface
{
    /**
     * @var mixed
     */
    private $value;

    /**
     * @param mixed $value
     *
     * @return void
     */
    private function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Classes\Variable
     * @throws \InvalidArgumentException
     * @throws \UnexpectedValueException
     */
    public function getType($return = Variable::class)
    {
        if (is_string($return)) {
            if (is_a($return, VariableInterface::class, true)) {
                return new $return(gettype($this->getValue()));
            } else {
                throw new UnexpectedValueException();
            }
        } else {
            throw new InvalidArgumentException();
        }
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function __construct($value = null)
    {
        $this->setValue($value);
    }
}
