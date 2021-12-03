<?php
/**
 * Creates the test class
 */
class CalculatorTest extends \PHPUnit\Framework\TestCase {
    public function testAdd(){
        /**
         * Calculator instance.
         */
        $calculator = new App\Calculator;

        /**
         * Get the result.
         */
        $result = $calculator->add(20, 5);

        /**
         * Assert the result.
         */
        $this->assertEquals(25, $result);
    }

}