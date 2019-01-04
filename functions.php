<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 1/4/2019
 * Time: 10:24 AM
 */

function printR($numbers){
    echo " '" . implode("','",$numbers) . "' ";
}

function largest($numbers){
    max($numbers);
}

printR();