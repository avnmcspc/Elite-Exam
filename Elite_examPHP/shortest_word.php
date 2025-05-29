<?php
function findShortestWord($input) {
    $words = explode(' ', $input);
    $shortest = $words[0];

    foreach ($words as $word) {
        if (strlen($word) < strlen($shortest)) {
            $shortest = $word;
        }
    }

    return $shortest;
}
echo "Test Case: ";
$handle = fopen("php://stdin", "r");
$input = trim(fgets($handle));

$shortestWord = findShortestWord($input);
echo "Because the shortest word is : $shortestWord\n";

?>
