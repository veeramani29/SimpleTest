<?php
final class MyTest
{
private $start;
private $end;
public function __construct($start,$end){
$this->start=$start;
$this->end=$end;
}
    public function doPrint($div1, $div2)
    { 
	
        for ( $i = $this->start; $i <= $this->end; $i++ )
{
   switch($i)
        {
            case ($i%($div1*$div2)==0):
            echo $i." Linianos"."\r\n";
            break;
            case ($i%$div1==0):
             echo $i." IT"."\r\n";
            break;
            case ($i%$div2==0):
             echo $i." Linio"."\r\n";
            break;
        case ($i):
             echo $i."\r\n";
            break;
        default;
      }
             
}
    }


}
