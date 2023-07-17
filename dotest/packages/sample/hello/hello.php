<?php
 

  function main(array $args) : array
  {
      $name = $args["name"] ?? "stranger";
      $greeting = testIncludeFn("Hello $name!") ;
      
      // $greeting2 = testingFnFromCommon();
      error_log("Start");
      echo "test message";
      
      // $greeting = "Hello $name!";
      return ["body" => $greeting  ];
  }

  function testIncludeFn($param)
  {
    return "AAAA" . $param ; 
  }