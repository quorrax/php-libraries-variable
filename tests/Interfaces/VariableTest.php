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
    public function provideGetTypeIntegerReturnCustom(); // IMPROVE: Rename this method.

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
     * @return void
     */
    public function testExtensionVariable();

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
     * @return void
     */
    public function testMethodGetValueDefault();
}
