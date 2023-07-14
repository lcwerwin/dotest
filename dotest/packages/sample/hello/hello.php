<?php

  include "common.php" ;

  function main(array $args) : array
  {
      $name = $args["name"] ?? "stranger";
      $greeting = testIncludeFn("Hello $name!") ;
      
      $greeting2 = testingFnFromCommon();
      error_log("Start");
      
      // $greeting = "Hello $name!";
      return ["body" => $greeting  . $greeting2];
  }

  function testIncludeFn($param)
  {
    return "AAAA" . $param ; 
  }