<?php

  include "common/common.php" ;

  function main(array $args) : array
  {
      $name = $args["name"] ?? "stranger";
      $greeting = testIncludeFn("Hello $name!") ;
      $greeting2 = testingFunction2();
      print_r ($greeting2);
      
      // $greeting = "Hello $name!";
      return ["body" => $greeting ];
  }

  function testIncludeFn($param)
  {
    return "AAAA" . $param ; 
  }