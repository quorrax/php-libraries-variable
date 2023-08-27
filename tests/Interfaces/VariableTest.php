<?php

namespace Quorrax\Tests\Interfaces;

interface VariableTest
{
    /**
     * @return array
     */
    public function provideConstruct();

    /**
     * @return array
     */
    public function provideGetTypeBoolean();

    /**
     * @return array
     */
    public function provideGetTypeBooleanReturnCustom();

    /**
     * @return array
     */
    public function provideGetTypeBooleanReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideGetTypeBooleanReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideGetTypeDefaultReturnCustom();

    /**
     * @return array
     */
    public function provideGetTypeDefaultReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideGetTypeDefaultReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideGetTypeFloat();

    /**
     * @return array
     */
    public function provideGetTypeFloatReturnCustom();

    /**
     * @return array
     */
    public function provideGetTypeFloatReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideGetTypeFloatReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideGetTypeInteger();

    /**
     * @return array
     */
    public function provideGetTypeIntegerReturnCustom();

    /**
     * @return array
     */
    public function provideGetTypeIntegerReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideGetTypeIntegerReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideGetTypeNull();

    /**
     * @return array
     */
    public function provideGetTypeNullReturnCustom();

    /**
     * @return array
     */
    public function provideGetTypeNullReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideGetTypeNullReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideGetTypeString();

    /**
     * @return array
     */
    public function provideGetTypeStringReturnCustom();

    /**
     * @return array
     */
    public function provideGetTypeStringReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideGetTypeStringReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideGetValue();

    /**
     * @return array
     */
    public function provideGetValueAsBoolean();

    /**
     * @return array
     */
    public function provideGetValueAsBooleanDefaultReturnCustom();

    /**
     * @return array
     */
    public function provideGetValueAsBooleanDefaultReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideGetValueAsBooleanDefaultReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideGetValueAsBooleanReturnCustom();

    /**
     * @return array
     */
    public function provideGetValueAsBooleanReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideGetValueAsBooleanReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideGetValueAsFloat();

    /**
     * @return array
     */
    public function provideGetValueAsFloatDefaultReturnCustom();

    /**
     * @return array
     */
    public function provideGetValueAsFloatDefaultReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideGetValueAsFloatDefaultReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideGetValueAsFloatReturnCustom();

    /**
     * @return array
     */
    public function provideGetValueAsFloatReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideGetValueAsFloatReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideIsBooleanDefaultReturnCustom();

    /**
     * @return array
     */
    public function provideIsBooleanDefaultReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideIsBooleanDefaultReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideIsBooleanFalse();

    /**
     * @return array
     */
    public function provideIsBooleanFalseReturnCustom();

    /**
     * @return array
     */
    public function provideIsBooleanFalseReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideIsBooleanFalseReturnCustomExceptionUnexpectedValue();

    /**
     * @return array
     */
    public function provideIsBooleanTrue();

    /**
     * @return array
     */
    public function provideIsBooleanTrueReturnCustom();

    /**
     * @return array
     */
    public function provideIsBooleanTrueReturnCustomExceptionInvalidArgument();

    /**
     * @return array
     */
    public function provideIsBooleanTrueReturnCustomExceptionUnexpectedValue();

    /**
     * @return void
     */
    public function testImplementations();

    /**
     * @dataProvider provideConstruct
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodConstruct($value);

    /**
     * @return void
     */
    public function testMethodConstructDefault();

    /**
     * @dataProvider provideGetTypeBoolean
     *
     * @param bool $value
     *
     * @return void
     */
    public function testMethodGetTypeBoolean($value);

    /**
     * @dataProvider provideGetTypeBooleanReturnCustom
     *
     * @param bool $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeBooleanReturnCustom($value, $return);

    /**
     * @dataProvider provideGetTypeBooleanReturnCustomExceptionInvalidArgument
     *
     * @param bool $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeBooleanReturnCustomExceptionInvalidArgument($value, $return);

    /**
     * @dataProvider provideGetTypeBooleanReturnCustomExceptionUnexpectedValue
     *
     * @param bool $value
     * @param string $return
     *
     * @return mixed
     */
    public function testMethodGetTypeBooleanReturnCustomExceptionUnexpectedValue($value, $return);

    /**
     * @return void
     */
    public function testMethodGetTypeDefault();

    /**
     * @dataProvider provideGetTypeDefaultReturnCustom
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeDefaultReturnCustom($return);

    /**
     * @dataProvider provideGetTypeDefaultReturnCustomExceptionInvalidArgument
     *
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeDefaultReturnCustomExceptionInvalidArgument($return);

    /**
     * @dataProvider provideGetTypeDefaultReturnCustomExceptionUnexpectedValue
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeDefaultReturnCustomExceptionUnexpectedValue($return);

    /**
     * @dataProvider provideGetTypeFloat
     *
     * @param float $value
     *
     * @return void
     */
    public function testMethodGetTypeFloat($value);

    /**
     * @dataProvider provideGetTypeFloatReturnCustom
     *
     * @param float $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeFloatReturnCustom($value, $return);

    /**
     * @dataProvider provideGetTypeFloatReturnCustomExceptionInvalidArgument
     *
     * @param float $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeFloatReturnCustomExceptionInvalidArgument($value, $return);

    /**
     * @dataProvider provideGetTypeFloatReturnCustomExceptionUnexpectedValue
     *
     * @param float $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeFloatReturnCustomExceptionUnexpectedValue($value, $return);

    /**
     * @dataProvider provideGetTypeInteger
     *
     * @param int $value
     *
     * @return void
     */
    public function testMethodGetTypeInteger($value);

    /**
     * @dataProvider provideGetTypeIntegerReturnCustom
     *
     * @param int $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeIntegerReturnCustom($value, $return);

    /**
     * @dataProvider provideGetTypeIntegerReturnCustomExceptionInvalidArgument
     *
     * @param int $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeIntegerReturnCustomExceptionInvalidArgument($value, $return);

    /**
     * @dataProvider provideGetTypeIntegerReturnCustomExceptionUnexpectedValue
     *
     * @param int $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeIntegerReturnCustomExceptionUnexpectedValue($value, $return);

    /**
     * @dataProvider provideGetTypeNull
     *
     * @param null $value
     *
     * @return void
     */
    public function testMethodGetTypeNull($value);

    /**
     * @dataProvider provideGetTypeNullReturnCustom
     *
     * @param null $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeNullReturnCustom($value, $return);

    /**
     * @dataProvider provideGetTypeNullReturnCustomExceptionInvalidArgument
     *
     * @param null $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeNullReturnCustomExceptionInvalidArgument($value, $return);

    /**
     * @dataProvider provideGetTypeNullReturnCustomExceptionUnexpectedValue
     *
     * @param null $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeNullReturnCustomExceptionUnexpectedValue($value, $return);

    /**
     * @dataProvider provideGetTypeString
     *
     * @param string $value
     *
     * @return void
     */
    public function testMethodGetTypeString($value);

    /**
     * @dataProvider provideGetTypeStringReturnCustom
     *
     * @param string $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetTypeStringReturnCustom($value, $return);

    /**
     * @dataProvider provideGetTypeStringReturnCustomExceptionInvalidArgument
     *
     * @param string $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetTypeStringReturnCustomExceptionInvalidArgument($value, $return);

    /**
     * @dataProvider provideGetTypeStringReturnCustomExceptionUnexpectedValue
     *
     * @param $value
     * @param $return
     *
     * @return void
     */
    public function testMethodGetTypeStringReturnCustomExceptionUnexpectedValue($value, $return);

    /**
     * @dataProvider provideGetValue
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodGetValue($value);

    /**
     * @dataProvider provideGetValueAsBoolean
     *
     * @param mixed $value
     * @param bool $expected
     *
     * @return void
     */
    public function testMethodGetValueAsBoolean($value, $expected);

    /**
     * @return void
     */
    public function testMethodGetValueAsBooleanDefault();

    /**
     * @dataProvider provideGetValueAsBooleanDefaultReturnCustom
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetValueAsBooleanDefaultReturnCustom($return);

    /**
     * @dataProvider provideGetValueAsBooleanDefaultReturnCustomExceptionInvalidArgument
     *
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetValueAsBooleanDefaultReturnCustomExceptionInvalidArgument($return);

    /**
     * @dataProvider provideGetValueAsBooleanDefaultReturnCustomExceptionUnexpectedValue
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetValueAsBooleanDefaultReturnCustomExceptionUnexpectedValue($return);

    /**
     * @dataProvider provideGetValueAsBooleanReturnCustom
     *
     * @param mixed $value
     * @param boolean $expected
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetValueAsBooleanReturnCustom($value, $expected, $return);

    /**
     * @dataProvider provideGetValueAsBooleanReturnCustomExceptionInvalidArgument
     *
     * @param mixed $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetValueAsBooleanReturnCustomExceptionInvalidArgument($value, $return);

    /**
     * @dataProvider provideGetValueAsBooleanReturnCustomExceptionUnexpectedValue
     *
     * @param mixed $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetValueAsBooleanReturnCustomExceptionUnexpectedValue($value, $return);

    /**
     * @dataProvider provideGetValueAsFloat
     *
     * @param mixed $value
     * @param float $expected
     *
     * @return void
     */
    public function testMethodGetValueAsFloat($value, $expected);

    /**
     * @return void
     */
    public function testMethodGetValueAsFloatDefault();

    /**
     * @dataProvider provideGetValueAsFloatDefaultReturnCustom
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetValueAsFloatDefaultReturnCustom($return);

    /**
     * @dataProvider provideGetValueAsFloatDefaultReturnCustomExceptionInvalidArgument
     *
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetValueAsFloatDefaultReturnCustomExceptionInvalidArgument($return);

    /**
     * @dataProvider provideGetValueAsFloatDefaultReturnCustomExceptionUnexpectedValue
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetValueAsFloatDefaultReturnCustomExceptionUnexpectedValue($return);

    /**
     * @dataProvider provideGetValueAsFloatReturnCustom
     *
     * @param mixed $value
     * @param float $expected
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetValueAsFloatReturnCustom($value, $expected, $return);

    /**
     * @dataProvider provideGetValueAsFloatReturnCustomExceptionInvalidArgument
     *
     * @param mixed $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodGetValueAsFloatReturnCustomExceptionInvalidArgument($value, $return);

    /**
     * @dataProvider provideGetValueAsFloatReturnCustomExceptionUnexpectedValue
     *
     * @param mixed $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodGetValueAsFloatReturnCustomExceptionUnexpectedValue($value, $return);

    /**
     * @return void
     */
    public function testMethodGetValueDefault();

    /**
     * @return void
     */
    public function testMethodIsBooleanDefault();

    /**
     * @dataProvider provideIsBooleanDefaultReturnCustom
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsBooleanDefaultReturnCustom($return);

    /**
     * @dataProvider provideIsBooleanDefaultReturnCustomExceptionInvalidArgument
     *
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodIsBooleanDefaultReturnCustomExceptionInvalidArgument($return);

    /**
     * @dataProvider provideIsBooleanDefaultReturnCustomExceptionUnexpectedValue
     *
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsBooleanDefaultReturnCustomExceptionUnexpectedValue($return);

    /**
     * @dataProvider provideIsBooleanFalse
     *
     * @param mixed $value
     *
     * @return void
     */
    public function testMethodIsBooleanFalse($value);

    /**
     * @dataProvider provideIsBooleanFalseReturnCustom
     *
     * @param mixed $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsBooleanFalseReturnCustom($value, $return);

    /**
     * @dataProvider provideIsBooleanFalseReturnCustomExceptionInvalidArgument
     *
     * @param mixed $value
     * @param mixed $return
     *
     * @return void
     */
    public function testMethodIsBooleanFalseReturnCustomExceptionInvalidArgument($value, $return);

    /**
     * @dataProvider provideIsBooleanFalseReturnCustomExceptionUnexpectedValue
     *
     * @param mixed $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsBooleanFalseReturnCustomExceptionUnexpectedValue($value, $return);

    /**
     * @dataProvider provideIsBooleanTrue
     *
     * @param bool $value
     *
     * @return void
     */
    public function testMethodIsBooleanTrue($value);

    /**
     * @dataProvider provideIsBooleanTrueReturnCustom
     *
     * @param bool $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsBooleanTrueReturnCustom($value, $return);

    /**
     * @dataProvider provideIsBooleanTrueReturnCustomExceptionInvalidArgument
     *
     * @param bool $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsBooleanTrueReturnCustomExceptionInvalidArgument($value, $return);

    /**
     * @dataProvider provideIsBooleanTrueReturnCustomExceptionUnexpectedValue
     *
     * @param bool $value
     * @param string $return
     *
     * @return void
     */
    public function testMethodIsBooleanTrueReturnCustomExceptionUnexpectedValue($value, $return);
}
