<?php
class OneIf{
private $start;
private $end;
public function __construct($start,$end){
$this->start=$start;
$this->end=$end;
}
public function withOneIf(){
$replacer = ["IT","Linio", "Linianos"];
$accumulator = [];

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 || $i % 5 == 0) {
    
    $accumulator[]=$replacer[(int)($i % 3 ==0 && $i % 5 >=1)+((int)($i % 3 == 0 && $i % 5 == 0) * 2)];
      continue;
  }
  $accumulator[]=($i);
}
  echo implode(',',$accumulator);
}
}

#$obj=new OneIf(1,100);
#$obj->withOneIf();
