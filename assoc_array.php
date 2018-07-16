<?php

/*
 * keys are case sensitive
 * arr[key]= value to add new value or replace
 * */
$iceCream = array('vsk'=>'butterScotch',
                  'Reshma' =>'vanila');
//adding a new element
$iceCream["Surya"] = "Milk";
$iceCream[]="Curd";  // here key will be next available integer...i.e. 0
//===========Type casting==

$keys = array(
        1 => 'a',1.5=>'b',"1"=>'c',true=>'d'
);

$iceCream = array(
    'Alena' => 'Black Cherry',
    'Treasure' => 'Chocolate',
    'Dave McFarland' => 'Cookies and Cream',
    'Rialla' => 'Strawberry'
);
$iceCream['alena'] = 'Pistachio';
$iceCream['Dave Thomas'] = 'Cookies and Cream';
$iceCream[] = 'Vanilla';
$iceCream['Andrew'] = true;
var_dump($iceCream);

$keys = array(
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
);
//var_dump($iceCream);

//all get typecast to 1..thus 1=>d is the single entry

//=============Multi dimentional array============

$arr1 = array();  // make an associative array with key and values
$arr2 = array();  // make an associative array with key and values
$list = array($arr1,$arr2);  //now this is a 2D array


or better
$list[] = array(=====);               // 1st ele
$list[] = array(===============);     // 2nd ele
//access using $list[0]["key1"];

// short array notation

$list[] = ['a'=>1,
           'b'=>2];

//=== we can also add the key

$list['task1'] = [=====];
$list['task2'] = [=====];


//access elements

echo $list[0]["key1"]; // this says first array..and the value of "key1" in that



