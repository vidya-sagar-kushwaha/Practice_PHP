<?php

$learn = array('php', 'goLang', 'sql');
$learn[] = 'java';
//echo $learn[1];

//convert to string with delimeter
echo implode("\n", $learn);

//replaced
//$learn = "assss";

//add at the end...with key as last_key+1
array_push($learn,'c++','c',2);

//add in front...also rearrange the key..0,1,2,3..
array_unshift($learn, 3);

// remove element
$removed = array_shift($learn);

//returns the removed element
array_pop($learn);    //remove from end
array_shift($learn);  //remove from front
var_dump($learn);


/*We can delete any random vakue in the array as long as we know the key*/
unset($learn[1], $learn[2]);  //->created some hole in keys
/*
 * we can unset any var..then it won't exist.
 * */

//refresh index...
$learn = array_values($learn);
var_dump($learn);