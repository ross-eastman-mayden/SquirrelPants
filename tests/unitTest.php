<?php

require_once '';

class ** extends PHPUnit_Framework_TestCase
{

    /**
     * @param $output
     * @param $input
     *
     * @dataProvider dataProvider
     */

    public function test**($output, $input)
    {
        $obj = new **;
        $this->assertEquals($output, $obj->**function($input));
    }

    public static function dataProvider()
    {

        return [
            [x, y],

        ];


    }