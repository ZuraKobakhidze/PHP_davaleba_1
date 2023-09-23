<?php

function checkIfNumberIsValid(int $number) {
    return $number < 100;
}

do {
    echo "---\n";
    echo "enter 0 to exit\n";
    echo "enter two numbers two get multiplication and if number is valid\n";
    echo "Enter first number: \n";

    $firstNumber = readline();

    switch ($firstNumber) {
        case 0:
            echo "Bye\n";
            break;
        default:
            echo "Enter second number: \n";
            $secondNumber = readline();
            switch ($secondNumber) {
                case 0:
                    echo "Bye\n";
                    break;
                default:
                    $result = $firstNumber * $secondNumber;
                    echo "Result: " . $result . "\n";
                    if (checkIfNumberIsValid($result)) {
                        echo "Number is valid\n";
                    } else {
                        echo "Number is not valid\n";
                    }
            }
    }
} while ($firstNumber != 0 && $secondNumber != 0);