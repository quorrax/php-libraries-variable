<?php

namespace Quorrax\Tests\Classes;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Quorrax\Classes\Variable;
use Quorrax\Interfaces\Variable as VariableInterface;
use Quorrax\Tests\Interfaces\VariableTest as VariableTestInterface;
use stdClass;
use UnexpectedValueException;

class VariableTest extends TestCase implements VariableTestInterface
{
    /**
     * @return array
     */
    private function getValues()
    {
        return array_merge(
            $this->getValuesBoolean(),
            $this->getValuesFloat(),
            $this->getValuesInteger(),
            $this->getValuesNull(),
            $this->getValuesString()
        );
    }

    /**
     * @return array
     */
    private function getValuesBoolean()
    {
        return [
            [
                false,
            ],
            [
                true,
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesFloat()
    {
        return [
            [
                0.0,
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesInteger()
    {
        return [
            [
                0,
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesNull()
    {
        return [
            [
                null,
            ],
        ];
    }

    /**
     * @return array
     */
    private function getValuesString()
    {
        return [
            [
                "",
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
    public function provideGetTypeBoolean()
    {
        return $this->getValuesBoolean();
    }

    /**
     * @return array
     */
    public function provideGetTypeBooleanReturnCustom()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustom() as $return) {
            foreach ($this->getValuesBoolean() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeBooleanReturnCustomExceptionInvalidArgument()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustomExceptionInvalidArgument() as $return) {
            foreach ($this->getValuesBoolean() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeBooleanReturnCustomExceptionUnexpectedValue()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustomExceptionUnexpectedValue() as $return) {
            foreach ($this->getValuesBoolean() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeDefaultReturnCustom()
    {
        return [
            [
                Variable::class,
            ],
        ];
    }

    /**
     * @return array
     */
    public function provideGetTypeDefaultReturnCustomExceptionInvalidArgument()
    {
        return array_merge(
            $this->getValuesBoolean(),
            $this->getValuesFloat(),
            $this->getValuesInteger(),
            $this->getValuesNull()
        );
    }

    /**
     * @return array
     */
    public function provideGetTypeDefaultReturnCustomExceptionUnexpectedValue()
    {
        return [
            [
                stdClass::class,
            ],
        ];
    }

    /**
     * @return array
     */
    public function provideGetTypeFloat()
    {
        return $this->getValuesFloat();
    }

    /**
     * @return array
     */
    public function provideGetTypeFloatReturnCustom()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustom() as $return) {
            foreach ($this->getValuesFloat() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeFloatReturnCustomExceptionInvalidArgument()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustomExceptionInvalidArgument() as $return) {
            foreach ($this->getValuesFloat() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeFloatReturnCustomExceptionUnexpectedValue()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustomExceptionUnexpectedValue() as $return) {
            foreach ($this->getValuesFloat() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeInteger()
    {
        return $this->getValuesInteger();
    }

    /**
     * @return array
     */
    public function provideGetTypeIntegerReturnCustom()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustom() as $return) {
            foreach ($this->getValuesInteger() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeIntegerReturnCustomExceptionInvalidArgument()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustomExceptionInvalidArgument() as $return) {
            foreach ($this->getValuesInteger() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeIntegerReturnCustomExceptionUnexpectedValue()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustomExceptionUnexpectedValue() as $return) {
            foreach ($this->getValuesInteger() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeNull()
    {
        return $this->getValuesNull();
    }

    /**
     * @return array
     */
    public function provideGetTypeNullReturnCustom()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustom() as $return) {
            foreach ($this->getValuesNull() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeNullReturnCustomExceptionInvalidArgument()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustomExceptionInvalidArgument() as $return) {
            foreach ($this->getValuesNull() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeNullReturnCustomExceptionUnexpectedValue()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustomExceptionUnexpectedValue() as $return) {
            foreach ($this->getValuesNull() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeString()
    {
        return $this->getValuesString();
    }

    /**
     * @return array
     */
    public function provideGetTypeStringReturnCustom()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustom() as $return) {
            foreach ($this->getValuesString() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeStringReturnCustomExceptionInvalidArgument()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustomExceptionInvalidArgument() as $return) {
            foreach ($this->getValuesString() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
    }

    /**
     * @return array
     */
    public function provideGetTypeStringReturnCustomExceptionUnexpectedValue()
    {
        $values = [];
        foreach ($this->provideGetTypeDefaultReturnCustomExceptionUnexpectedValue() as $return) {
            foreach ($this->getValuesString() as $value) {
                $values[] = array_merge($value, $return);
            }
        }
        return $values;
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
     * @dataProvider provideGetTypeBoolean
     *
     * @param bool $value
     *
     * @return void
     */
    public function testMethodGetTypeBoolean($value)
    {
        $variable = new Variable($value);
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("boolean", $type->getValue());
    }

    /**
     * @dataProvider provideGetTypeBooleanReturnCustom
     *
     * @param bool $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeBooleanReturnCustom($value, $return)
    {
        $variable = new Variable($value);
        $type = $variable->getType($return);
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf($return, $type);
        $this->assertSame("boolean", $type->getValue());
    }

    /**
     * @dataProvider provideGetTypeBooleanReturnCustomExceptionInvalidArgument
     *
     * @param bool $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeBooleanReturnCustomExceptionInvalidArgument($value, $return)
    {
        $variable = new Variable($value);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage("");
        $variable->getType($return);
    }

    /**
     * @dataProvider provideGetTypeBooleanReturnCustomExceptionUnexpectedValue
     *
     * @param bool $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeBooleanReturnCustomExceptionUnexpectedValue($value, $return)
    {
        $variable = new Variable($value);
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage("");
        $variable->getType($return);
    }

    /**
     * @return void
     */
    public function testMethodGetTypeDefault()
    {
        $variable = new Variable();
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("NULL", $type->getValue());
    }

    /**
     * @dataProvider provideGetTypeDefaultReturnCustom
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeDefaultReturnCustom($return)
    {
        $variable = new Variable();
        $type = $variable->getType($return);
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf($return, $type);
        $this->assertSame("NULL", $type->getValue());
    }

    /**
     * @dataProvider provideGetTypeDefaultReturnCustomExceptionInvalidArgument
     *
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeDefaultReturnCustomExceptionInvalidArgument($return)
    {
        $variable = new Variable();
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionCode(0); // IMPROVE: Define a proper number for the exception.
        $this->expectExceptionMessage(""); // IMPROVE: Define a proper message for the exception.
        $variable->getType($return);
    }

    /**
     * @dataProvider provideGetTypeDefaultReturnCustomExceptionUnexpectedValue
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeDefaultReturnCustomExceptionUnexpectedValue($return)
    {
        $variable = new Variable();
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionCode(0); // IMPROVE: Define a proper number for the exception.
        $this->expectExceptionMessage(""); // IMPROVE: Define a proper message for the exception.
        $variable->getType($return);
    }

    /**
     * @dataProvider provideGetTypeFloat
     *
     * @param float $value
     *
     * @return void
     */
    public function testMethodGetTypeFloat($value)
    {
        $variable = new Variable($value);
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("double", $type->getValue()); // IMPROVE: It should return "float" instead of "double".
    }

    /**
     * @dataProvider provideGetTypeFloatReturnCustom
     *
     * @param float $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeFloatReturnCustom($value, $return)
    {
        $variable = new Variable($value);
        $type = $variable->getType($return);
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf($return, $type);
        $this->assertSame("double", $type->getValue());
    }

    /**
     * @dataProvider provideGetTypeFloatReturnCustomExceptionInvalidArgument
     *
     * @param float $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeFloatReturnCustomExceptionInvalidArgument($value, $return)
    {
        $variable = new Variable($value);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage("");
        $variable->getType($return);
    }

    /**
     * @dataProvider provideGetTypeFloatReturnCustomExceptionUnexpectedValue
     *
     * @param float $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeFloatReturnCustomExceptionUnexpectedValue($value, $return)
    {
        $variable = new Variable($value);
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage("");
        $variable->getType($return);
    }

    /**
     * @dataProvider provideGetTypeInteger
     *
     * @param int $value
     *
     * @return void
     */
    public function testMethodGetTypeInteger($value)
    {
        $variable = new Variable($value);
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("integer", $type->getValue());
    }

    /**
     * @dataProvider provideGetTypeIntegerReturnCustom
     *
     * @param int $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeIntegerReturnCustom($value, $return)
    {
        $variable = new Variable($value);
        $type = $variable->getType($return);
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf($return, $type);
        $this->assertSame("integer", $type->getValue());
    }

    /**
     * @dataProvider provideGetTypeIntegerReturnCustomExceptionInvalidArgument
     *
     * @param int $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeIntegerReturnCustomExceptionInvalidArgument($value, $return)
    {
        $variable = new Variable($value);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage("");
        $variable->getType($return);
    }

    /**
     * @dataProvider provideGetTypeIntegerReturnCustomExceptionUnexpectedValue
     *
     * @param int $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeIntegerReturnCustomExceptionUnexpectedValue($value, $return)
    {
        $variable = new Variable($value);
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage("");
        $variable->getType($return);
    }

    /**
     * @dataProvider provideGetTypeNull
     *
     * @param null $value
     *
     * @return void
     */
    public function testMethodGetTypeNull($value)
    {
        $variable = new Variable($value);
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("NULL", $type->getValue()); // IMPROVE: It should return "null" instead of "NULL".
    }

    /**
     * @dataProvider provideGetTypeNullReturnCustom
     *
     * @param null $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeNullReturnCustom($value, $return)
    {
        $variable = new Variable($value);
        $type = $variable->getType($return);
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf($return, $type);
        $this->assertSame("NULL", $type->getValue());
    }

    /**
     * @dataProvider provideGetTypeNullReturnCustomExceptionInvalidArgument
     *
     * @param null $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeNullReturnCustomExceptionInvalidArgument($value, $return)
    {
        $variable = new Variable($value);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage("");
        $variable->getType($return);
    }

    /**
     * @dataProvider provideGetTypeNullReturnCustomExceptionUnexpectedValue
     *
     * @param null $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeNullReturnCustomExceptionUnexpectedValue($value, $return)
    {
        $variable = new Variable($value);
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage("");
        $variable->getType($return);
    }

    /**
     * @dataProvider provideGetTypeString
     *
     * @param string $value
     *
     * @return void
     */
    public function testMethodGetTypeString($value)
    {
        $variable = new Variable($value);
        $type = $variable->getType();
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf(Variable::class, $type);
        $this->assertSame("string", $type->getValue());
    }

    /**
     * @dataProvider provideGetTypeStringReturnCustom
     *
     * @param string $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeStringReturnCustom($value, $return)
    {
        $variable = new Variable($value);
        $type = $variable->getType($return);
        $this->assertInstanceOf(VariableInterface::class, $type);
        $this->assertInstanceOf($return, $type);
        $this->assertSame("string", $type->getValue());
    }

    /**
     * @dataProvider provideGetTypeStringReturnCustomExceptionInvalidArgument
     *
     * @param string $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeStringReturnCustomExceptionInvalidArgument($value, $return)
    {
        $variable = new Variable($value);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage("");
        $variable->getType($return);
    }

    /**
     * @dataProvider provideGetTypeStringReturnCustomExceptionUnexpectedValue
     *
     * @param $value
     * @param $return
     *
     * @return void
     */
    public function testMethodGetTypeStringReturnCustomExceptionUnexpectedValue($value, $return)
    {
        $variable = new Variable($value);
        $this->expectException(UnexpectedValueException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage("");
        $variable->getType($return);
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
