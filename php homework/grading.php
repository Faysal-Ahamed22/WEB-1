<?php

function takeIntegerInput($message) {
    do {
        $input = readline($message);
    } while (!is_numeric($input));
    return (int)$input;
}

function takeArrayInput() {
    $array = [];
    $count = takeIntegerInput("Enter the number of elements in the array: ");
    for ($i = 0; $i < $count; $i++) {
        $array[] = takeIntegerInput("Enter element " . ($i + 1) . ": ");
    }
    return $array;
}

function sortArray($array) {
    sort($array);
    return $array;
}

$inputArray = takeArrayInput();
$sortedArray = sortArray($inputArray);

echo "Sorted array: ";
foreach ($sortedArray as $element) {
    echo $element . " ";
}
echo "\n";

?>
