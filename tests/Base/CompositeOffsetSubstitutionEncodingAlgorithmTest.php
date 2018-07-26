<?php

namespace Base;

/**
 * Class CompositeEncodingAlgorithmTest
 * @package Base
 */
class CompositeOffsetSubstitutionEncodingAlgorithmTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTexts
     * @param $offset
     * @param $text
     * @param $encoded
     */
    public function testValidEncoding($offset, $text, $encoded)
    {
        $algorithm = new \CompositeEncodingAlgorithm();

        $algorithm->add(new \OffsetEncodingAlgorithm($offset));
        $algorithm->add(new \SubstitutionEncodingAlgorithm(array('ga', 'de', 'ry', 'po', 'lu', 'ki')));

        $this->assertEquals($encoded, $algorithm->encode($text));
    }

    /**
     * @return array
     */
    public function getTexts()
    {
        return array(
            array(0, '', ''),
            array(0, 'abc', 'gbc'),
            array(1, 'abc', 'bce'),
            array(1, 'abc def, ghi.', 'bce dfa, hkj.'),
            array(26, 'abc def.', 'GBC EDF.'),
            array(26, 'ABC DEF.', 'gbc edf.'),
        );
    }

    /**
     * @dataProvider getReversedTexts
     * @param $offset
     * @param $text
     * @param $encoded
     */
    public function testReverseOrder($offset, $text, $encoded)
    {
        $algorithm = new \CompositeEncodingAlgorithm();

        $algorithm->add(new \SubstitutionEncodingAlgorithm(array('ga', 'de', 'ry', 'po', 'lu', 'ki')));
        $algorithm->add(new \OffsetEncodingAlgorithm($offset));

        $this->assertEquals($encoded, $algorithm->encode($text));
    }

    /**
     * @return array
     */
    public function getReversedTexts()
    {
        return array(
            array(0, 'abc', 'gbc'),
            array(1, 'abc', 'hcd'),
            array(1, 'abc def, ghi.', 'hcd feg, bil.')
        );
    }
}