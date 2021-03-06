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
     * @param string $function
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variable
     * @throws \InvalidArgumentException
     * @throws \UnexpectedValueException
     */
    private function execute($function, $return)
    {
        if (is_string($return)) {
            if (is_a($return, VariableInterface::class, true)) {
                switch ($function) {
                    case "empty":
                        return new $return(empty($this->getValue()));
                    default:
                        return new $return(call_user_func($function, $this->getValue()));
                }
            } else {
                throw new UnexpectedValueException();
            }
        } else {
            throw new InvalidArgumentException();
        }
    }

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
     * @return \Quorrax\Interfaces\Variable
     */
    public function getType($return = Variable::class)
    {
        return $this->execute("gettype", $return);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variable
     */
    public function getValueAsBoolean($return = Variable::class)
    {
        return $this->execute("boolval", $return);
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variable
     */
    public function getValueAsFloat($return = Variable::class)
    {
        return $this->execute("floatval", $return);
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variable
     */
    public function isBoolean($return = Variable::class)
    {
        return $this->execute("is_bool", $return);
    }

    /**
     * @param string $return
     *
     * @return \Quorrax\Interfaces\Variable
     */
    public function isEmpty($return = Variable::class)
    {
        return $this->execute("empty", $return);
    }

    /**
     * @param mixed $value
     */
    public function __construct($value = null)
    {
        $this->setValue($value);
    }
}
