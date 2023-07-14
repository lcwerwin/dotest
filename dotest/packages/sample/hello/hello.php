<?php

  include "include.php" ;

  function main(array $args) : array
  {
      $name = $args["name"] ?? "stranger";
      $greeting = testIncludeFn("Hello $name!") ;
      // $greeting2 = testingFunction2();
      error_log("Start");
      
      // $greeting = "Hello $name!";
      return ["body" => $greeting . testInclude() ];
  }

  function testIncludeFn($param)
  {
    return "AAAA" . $param ; 
  }