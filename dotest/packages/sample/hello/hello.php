<?php

  include "common/common.php" ;

  function main(array $args) : array
  {
      $name = $args["name"] ?? "stranger";
      $greeting = testIncludeFn("Hello $name!") ;
      $greeting = testingFunction2();
      // echo $greeting;
      
      // $greeting = "Hello $name!";
      return ["body" => $greeting];
  }

  function testIncludeFn($param)
  {
    return "AAAA" . $param ; 
  }