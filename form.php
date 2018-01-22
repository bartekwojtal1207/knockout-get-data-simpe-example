<?php
/**
 * Created by PhpStorm.
 * User: Bartek
 * Date: 2018-01-10
 * Time: 20:01
 */;


//if(! empty ($_POST['elo']) ) {
//    echo $_POST['elo'];
//    echo ('<br/>');
//
//
//}else {
//    echo "false";
//}
//
//if(! empty ($_POST['witam']) ) {
//    echo $_POST['witam'];
//    echo ('<br/>');
//
//}else {
//    echo "false";
//}

if(!empty ($_POST['text_input_two']))
{
    echo gettype($_POST['text_input_two']);
}

if (!empty ($_POST['number_input_two']))
{
    echo gettype($_POST['number_input_two']);
}

if (!empty ($_POST['number_input_last']))
{
    echo gettype($_POST['number_input_last']);
}

$productList = [];

//

