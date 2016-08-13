<?php

use phpunit\framework\TestCase;

class BuilderTest extends TestCase
{
    public function testInt(){
        $Rule = new \GK\Filter\Filters\Integer('test_field');
        $generated = $Rule->getFilterRule();
        $expected = ['filter'=>FILTER_VALIDATE_INT];
        $this->assertEquals($generated,$expected,'Not equal');
    }

}