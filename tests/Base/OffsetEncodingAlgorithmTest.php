<?php

namespace App\Test;

use App\OffsetEncodingAlgorithm;
use PHPUnit\Framework\TestCase;

/**
 * Class OffsetEncodingAlgorithmTest
 * @package App\Test
 */
class OffsetEncodingAlgorithmTest extends TestCase
{
    /**
     * @dataProvider getTexts
     * @param $offset
     * @param $text
     * @param $encoded
     */
    public function testValidEncoding($offset, $text, $encoded)
    {
        $algorithm = new OffsetEncodingAlgorithm($offset);

        $this->assertEquals($encoded, $algorithm->encode($text));
    }

    /**
     * @return array
     */
    public function getTexts()
    {
        return array(
            array(0, '', ''),
            array(1, '', ''),
            array(1, 'a', 'b'),
            array(0, 'abc def.', 'abc def.'),
            array(1, 'abc def.', 'bcd efg.'),
            array(2, 'z', 'B'),
            array(1, 'Z', 'a'),
            array(26, 'abc def.', 'ABC DEF.'),
            array(26, 'ABC DEF.', 'abc def.'),
        );
    }
}