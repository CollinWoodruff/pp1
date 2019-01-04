<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 1/4/2019
 * Time: 10:24 AM
 */

function printR() {
    $numbers = array("7","9","8","9","8","8","6");
    echo " '" . implode("','",$numbers) . "' ";
}

printR();