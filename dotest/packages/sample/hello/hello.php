<?php

  include "common/common.php" ;

  function main(array $args) : array
  {
      $name = $args["name"] ?? "stranger";
      $greeting = testIncludeFn("Hello $name!") ;
      $greeting2 = testingFunction2();
      // echo $greeting;
      
      // $greeting = "Hello $name!";
      return ["body" => $greeting . $greeting2];
  }

  function testIncludeFn($param)
  {
    return "AAAA" . $param ; 
  }