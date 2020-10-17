<?php

$data_type_scalar = [
    "Magang TOP",
    168,
    12.6,
    true,
    false
];

foreach ($data_type_scalar as $key)
{
    if (is_scalar($key))
    {
        echo gettype($key)."Scalar Type".PHP_EOL;
    }
}


echo (isset($data_type_scalar) ? true : false) ? "Data Ditemukan" : "Tidak ditemukan";  //ternary

//if logic

if (isset($data_type_scalar))
{
    echo "Ditemukan";
} else {
    echo "Tidak ditemukan";
}

echo PHP_EOL;

$empty_data=[
    "",
    "0",
    0,
    0.0,
    [],
    false,
    null
];

foreach ($empty_data as $key)
{
    if (empty($key) || !is_array($key))
    {
        echo gettype($key)."is empty".PHP_EOL;
    }
}

echo PHP_EOL;

// Constant //konstan nilainya mutlak tidak bisa diubah 

define("VERSION","v-1.0");

const AUTHOR="venom";

$nama = "Hello";

$nama = "World";

echo VERSION;

echo PHP_OS;

echo AUTHOR;

defined("AUTHOaR") or exit("Not Found");