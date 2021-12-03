// Creating a Power function in PHP from scratch for learning purposes.

function power($base, $exponent){
    $result = 1;
    for($i=$exponent; $i > 0; $i--){
        $result = $result * $base;
    }
    return $result;
}

// Example: echo power(5,2);

// Same function using a while loop:

function power($base, $exponent){
    $result = 1;
    while($exponent > 0){
        $exponent--;
        $result = $result * $base;
    }
    return $result;
}
echo 3.14 * power(5,2); /* Area of a Circle Calculation -- For a more accurate value, one can use the
                           pi() PHP internal function. As this function emulates the basic operation of
                           the pow() function, it's only matter of preference */ 

// These set of functions will only work with a positive exponent.
