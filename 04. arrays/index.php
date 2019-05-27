<?php
// $arr = array(4, 6, 345, "string", true);
// $arr1 = [43, 9, 16, 3, "str", true, ["test", 44]];

// echo $arr1[1];
// echo "<br>";
// $arr1[1] = 10;
// echo $arr1[1];
// echo "<br>";

$arr3 = [
    [
        "Model" => "Samsung",
        "Price" => 3400
    ],
    [
        "Model" => "Apple",
        "Price" => 6400
    ],
    [
        "Model" => "Sony",
        "Price" => 3000
    ]
    // "Model" => "Samsung",
    // "Price" => 3400
    
];

// $stack = array("orange", "banana");
// array_push($stack, "apple", "raspberry");
// print_r($stack);

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result);

// echo $arr3["Model"];
// echo "<br>";
// echo $arr3["Price"];
// echo "<br>";
// echo "<pre>";
// var_dump($arr3);
// echo "</pre>";

// foreach ($arr3 as $key => $value) {
//     echo "key " . $key . " value " . $value . "<br>";
// }

//  foreach ($arr3 as $value) {
//      echo " value " . $value . "<br>";
//  }


 /*$str = 'One two three';
    $result = explode(' ', $str);
    print_r($result);
    echo '<br/ >' . $result[0];*/

    /*$arr = [
        'One',
        'two',
        'three'
    ] ;

    $str = implode(' ', $arr);
    echo ($str);

    $str = join(' ', $arr);
    echo ($str);*/

    /*$str = "\n  <p>Hello</p>\n";
    $str .= "\n  <p>World</p> \t\n";
    trim($str);
    echo $str;*/

    /* $str = 'mypassword';
     echo $str . '<br />';
     echo md5($str);*/
    /*Приклад*/

    /*$str = "\n  <p>Hello\nworld\n</p>\n";
    echo  $str;
    echo nl2br($str);*/

    /*$str = "Hello! My name is Ted" . '<br />';
    echo $str;
    echo str_replace('Ted', "Tom", $str);*/


    /*$str = "Hello! My name is Ted" . '<br />';
    $search = ['Hello', 'My', 'name', 'is'];
    $replace = ['Привіт', 'мене','', 'звати'];
    $result = str_replace($search, $replace, $str);
    echo $result;*/

    /*$str2 = "hello! my name is Ted" . '<br />';
    $search = ['Hello', 'My', 'name', 'is'];
    $replace = ['Привіт', 'мене','', 'звати'];
    $result = str_ireplace($search, $replace, $str2);
    echo $result;*/

    /*$str = '<i>Hello</i>! My name is  <b>Ted</b>! <script>alert("XSS")</script>';
    echo $str;
    echo strip_tags($str);*/

    /*$str = "Hello!";
    echo strlen($str);*/

    /*$str = "Привіт!";
    echo strlen($str) . "<br />";
    echo mb_strlen($str, 'utf-8'); //php 5.6*/


    /*$str = '<h1><i>Hello</i>! My name is <b>Tom</b>!</h1><iframe src="http://itstep.org" height="100%" width="100%"></iframe><script>alert(\'XSS\')</script>';
    echo $str;
    echo htmlspecialchars($str, ENT_QUOTES);*/

    