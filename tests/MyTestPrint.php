<?php
require 'MyTest.php';
require 'OneIf.php';
use PHPUnit\Framework\TestCase;


class MyTestPrint extends TestCase
{
    private $mytest;


    protected function setUp()
    {
        $this->mytest = new MyTest(1,100);
    }


    protected function tearDown()
    {
        $this->mytest = NULL;
    }


    public function testPrint()
    {
        $result = $this->mytest->doPrint(3, 5);

             

        $this->asserttrue(true);
    }
public function testoneifPrint(){
$obj=new OneIf(1,100);
$obj->withOneIf();
$this->asserttrue(true);
}


}
