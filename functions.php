<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 1/4/2019
 * Time: 10:24 AM
 */

/**
 * @param $numbers
 */
function printR($numbers){
    echo implode(",", $numbers);
}

/**
 * @param $numbers
 */
function largest($numbers){
    echo max($numbers);
}

/**
 * @param $numbers
 */
function average($numbers){
    $sum = 0;
    foreach($numbers as $number){
        $sum += $number;
    }
    echo $sum/sizeof($numbers);
}

function removeDups($numbers){
    $dups = array();
    foreach(array_count_values($numbers) as $val => $c) {
        if ($c > 1) $dups[] = $val;
        echo $val . " ";
    }
}

function distribution($numbers){
    $dups = array();
    echo "[";
    foreach(array_count_values($numbers) as $val => $c) {
        if ($c > 1) $dups[] = $val;
        echo $val . "=>" . $c;
        if($val != 6) {
            echo ", ";
        }
    }
    echo "]";
}