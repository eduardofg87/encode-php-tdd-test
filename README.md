# PHP TDD Encode TEST
A simple PHP project to learn TDD - Based on Classical Cipher Encode


## Introduction
Your task is to build a utility to secure text encoding. All the encoders implement EncodingAlgorithm interface that include single encode($text) function, that returns a text, or throw an exception in case of failure.

### Transposition ciphers
#### https://en.wikipedia.org/wiki/Classical_cipher:
In a transposition cipher, the letters themselves are kept unchanged, but their order within the message is scrambled according to some well-defined scheme. Many transposition ciphers are done according to a geometric design. A simple (and once again easy to crack) encryption would be to write every word backwards. 

For example, "Hello my name is Alice." would now be "olleH ym eman si ecilA." A scytale is a machine that aids in the transposition of methods.

## Task definition:
you have to implements all the encoders to pass all tests. all encoders are empty but contain only @todo annotation. detailed description of each encoder is described in a docblock of encode method.

## tasks:
*  implement OffsetEncodingAlgorithm 
*  implement SubstitutionEncodingAlgorithm
*  implement CompositeEncodingAlgorithm 
*  create new EncodingAlgorithm named TranspositionEncodingAlgorithm 

# Installation

``` git clone https://github.com/eduardofg87/encode-php-tdd-test.git ```

``` cd encode-php-tdd-test ```

``` composer install ```


### EXTRA: 
keep track of the history of encoded words in a local storage.

### Hints

Think about how to prevent invalid inputs from being passed to the algorithms.

### test
to run the tests run the command: ```phpunit```



### Misc

* [PHP Unit](https://phpunit.de/)
* [Let's TDD a simple App in PHP](https://code.tutsplus.com/tutorials/lets-tdd-a-simple-app-in-php--net-26186)
