<?php

$start = 1;
/* for文の終わりの値を定義する */
$end = 101;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }