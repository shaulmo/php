// Creating a Power function in PHP from scratch for learning purposes.

function power($base, $exponent){
    $result = 1;
    for($i=$exponent; $i > 0; $i--){
        $result = $result * $base;
    }
    return $result;
}

// Example: echo power(5,2);
