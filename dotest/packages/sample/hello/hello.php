<?php
 
  // include_once "include.php";

  function main(array $args) : array
  {
      $name = $args["name"] ?? "stranger";
      $greeting = testIncludeFn("Hello $name!") ;
      
      // $greeting2 = testSameFolder($greeting);
      error_log("Start");
      echo "test message";
      
      // $greeting = "Hello $name!";
      return ["body" => $greeting ];
  }

  function testIncludeFn($param)
  {
    return "AAAA" . $param ; 
  }


?>