<?php 

function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function displayFirstPrimes() {
    $count = 0;
    $number = 2;
    while ($count < 5) {
        if (isPrime($number)) {
            echo $number . " ";
            $count++;
        }
        $number++;
    }
}

displayFirstPrimes();
