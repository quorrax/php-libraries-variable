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
