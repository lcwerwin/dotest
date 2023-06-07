<?php

  include "include.php" ;

  function main(array $args) : array
  {
      $name = $args["name"] ?? "stranger";
      $greeting = testIncludeFn("Hello $name!");
      // echo $greeting;
      return ["body" => $greeting];
  }
