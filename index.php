<?php

require_once __DIR__ . '/vendor/autoload.php';


use App\CodingFun;


$model = new CodingFun();

// Question 1 : 
//dd($model->getFibonacciSequence(10));

// Question 2 : 
dd($model->getCustomerBalances());