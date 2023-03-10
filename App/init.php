<?php

// require __DIR__.'/src/CalculatorInterface.php';
// require __DIR__.'/src/AbstractCalculator.php';
// require __DIR__.'/src/FirstRuleCalculator.php';
// require __DIR__.'/src/SecondRuleCalculator.php';
// require __DIR__.'/src/ThirdRuleCalculator.php';
// require __DIR__.'/src/FourthRuleCalculator.php';
// require __DIR__.'/src/PPH21Calculator.php';

spl_autoload_register(function ($class) {

    $class = explode('//', $class);
    $class = end($class);

    require_once __DIR__ . '/Calculate/' . $class . '.php';

});