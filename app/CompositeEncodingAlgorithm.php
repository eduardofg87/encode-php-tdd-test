<?php

namespace App;

/**
 * Class CompositeEncodingAlgorithm
 */
class CompositeEncodingAlgorithm implements EncodingAlgorithm
{
    /**
     * @var EncodingAlgorithm[]
     */
    private $algorithms;

    /**
     * CompositeEncodingAlgorithm constructor
     */
    public function __construct()
    {
        $this->algorithms = array();
    }

    /**
     * @param EncodingAlgorithm $algorithm
     */
    public function add(EncodingAlgorithm $algorithm)
    {
        $this->algorithms[] = $algorithm;
    }

    /**
     * Encodes text using multiple Encoders (in orders encoders were added)
     *
     * @param string $text
     * @return string
     */
    public function encode($text)
    {
        /**
         * @todo: Implement it
         */

        return '';
    }
}