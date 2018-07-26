<?php

namespace Base;

/**
 * Class SubstitutionEncodingAlgorithmTest
 * @package Base
 */
class SubstitutionEncodingAlgorithmTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getTexts
     * @param $substitutions
     * @param $text
     * @param $encoded
     */
    public function testValidEncoding($substitutions, $text, $encoded)
    {
        $algorithm = new \SubstitutionEncodingAlgorithm($substitutions);

        $this->assertEquals($encoded, $algorithm->encode($text));
    }

    /**
     * @return array
     */
    public function getTexts()
    {
        return array(
            array(array('ab'), 'aabbcc', 'bbaacc'),
            array(array('ab', 'cd'), 'adam', 'bcbm'),
            array(array('ga', 'de', 'ry', 'po', 'lu', 'ki'), 'lorem ipsum dolor', 'upydm koslm epupy'),
            array(array('ga', 'de', 'ry', 'po', 'lu', 'ki'), 'libero euismod bibendum', 'ukbdyp dlksmpe bkbdnelm'),
            array(array('ga', 'de', 'ry', 'po', 'lu', 'ki'), 'LIBERO EUISMOD BIBENDUM', 'UKBDYP DLKSMPE BKBDNELM'),
        );
    }
}