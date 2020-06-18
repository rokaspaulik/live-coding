<?php

include('interfaces/icalculatable.php');
include('model/printer.php');
include('model/calcmultinum.php');
include('model/divideby.php');
include('model/largerthan.php');

echo "Task v1: \n";
$printer = new Printer(1, 20, ' ');
$printer->addBehavior(new DivideBy(3, 'pa'));
$printer->addBehavior(new DivideBy(5, 'pow'));
echo $printer;

echo "\nTask v2: \n";
$printer = new Printer(1, 15, '-');
$printer->addBehavior(new DivideBy(2, 'hatee'));
$printer->addBehavior(new DivideBy(7, 'ho'));
echo $printer;

echo "\nTask v3: \n";
$printer = new Printer(1, 10, '-');
$printer->addBehavior(new CalcMultiNum([1,4,9], 'joff'));
$printer->addBehavior(new LargerThan(5, 'tchoff'));
echo $printer;
