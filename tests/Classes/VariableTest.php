<?php

namespace Quorrax\Tests\Classes;

use PHPUnit\Framework\TestCase;
use Quorrax\Classes\Variable;
use Quorrax\Interfaces\Variable as VariableInterface;
use Quorrax\Tests\Interfaces\VariableTest as VariableTestInterface;

class VariableTest extends TestCase implements VariableTestInterface
{
    /**
     * @return array
     */
    private function getValues()
    {
        return [
            [
                false,
            ],
        ];
    }

    /**
     * @return array
     */
    public function provideConstruct()
    {
        return $this->getValues();
    }

    /**
     * @return array
     */
    public function provideGetValue()
    {
        return $this->getValues();
    }

    /**
     * @return void
     */
    public function testExtensionVariable()
    {
        $this->assertInstanceOf(VariableInterface::class, new Variable());
    }

    /**
     * @dataProvider provideConstruct
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodConstruct($value)
    {
        $this->assertInstanceOf(Variable::class, new Variable($value));
    }

    /**
     * @return void
     */
    public function testMethodConstructDefault()
    {
        $this->assertInstanceOf(Variable::class, new Variable());
    }

    /**
     * @dataProvider provideGetValue
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodGetValue($value)
    {
        $variable = new Variable($value);
        $this->assertSame($value, $variable->getValue());
    }

    /**
     * @return void
     */
    public function testMethodGetValueDefault()
    {
        $variable = new Variable();
        $this->assertSame(null, $variable->getValue());
    }
}
