<?php

/**
 * Interface Algorithm
 */
interface EncodingAlgorithm
{
    /**
     * @param string $text
     * @return string
     */
    public function encode($text);
}