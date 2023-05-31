<?php
 
function main(array $args) : array
{
 
    $param = $args ;
     return [
        'action' => $param["action"],
        'data' => $param["data"]
    ];
}
