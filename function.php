<?php

function sayName($name="Uwu")
{
    echo "Hello ".$name.PHP_EOL;
}

sayName();
sayName("Anang");

call_user_func('sayName','John Doe');

call_user_func_array('sayName',['Jane Doe']);

// Anonymous function ( Clousure )

$soldier=function($name){echo $name.PHP_EOL;};

$soldier("Captain Price");

// $result=fn($x)=>$x*2;

// echo $result(19);

function getLastName($name)
{
    $real_name=explode(" ",$name);

    $getLastIndex=count($real_name)-1;

    if ($real_name[$getLastIndex]!="Doe")
    {
        return "Youre not Doe Family";
    }
    return $real_name[$getLastIndex].PHP_EOL;

}

echo getLastName("Jane Doe Zuckernberg");