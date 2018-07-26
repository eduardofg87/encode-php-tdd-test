<?php

namespace Base;

/**
 * Class CompositeEncodingAlgorithmTest
 * @package verify_pack
 */
class CompositeEncodingAlgorithmTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Prophecy\Prophet
     */
    private $prophet;

    protected function setup()
    {
        $this->prophet = new \Prophecy\Prophet;
    }

    public function testComposedAlgorithmsAreCalled()
    {
        $algorithmA = $this->prophet->prophesize('\EncodingAlgorithm');
        $algorithmB = $this->prophet->prophesize('\EncodingAlgorithm');

        $algorithmA->encode("plain text")->willReturn("encoded text");
        $algorithmB->encode("encoded text")->willReturn("text encoded twice");

        $algorithm = new \CompositeEncodingAlgorithm();
        $algorithm->add($algorithmA->reveal());
        $algorithm->add($algorithmB->reveal());

        $this->assertSame("text encoded twice", $algorithm->encode("plain text"));
    }

    protected function tearDown()
    {
        $this->prophet->checkPredictions();
    }
}