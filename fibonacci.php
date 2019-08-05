<?php
  function fib ($n){
      $arr = [0,1];
      for($i = 2;$i<$n; $i++){
          array_push($arr, ($arr[$i-1]+$arr[$i-2]) );
      }
      return array_slice($arr,-($n));
  }
print_r(fib(64));