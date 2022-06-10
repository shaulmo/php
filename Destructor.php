<?php

class Instance{
    public static $instanceCount = 0;
    public function __construct(){
        echo "Creating an instance";
        self::$instanceCount++;
}
    public function __destruct(){
        echo "Deleting an instance";
        self::$instanceCount--;
    }
}

$obj = new Instance;
echo "<br>";
print_r(Instance::$instanceCount);
echo "<br>";
unset($obj);
echo "<br>";
print_r(Instance::$instanceCount);
