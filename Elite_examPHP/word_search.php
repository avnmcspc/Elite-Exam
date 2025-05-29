<?php
function findTargetIndices($words, $target) {
    $indices = [];

    foreach ($words as $index => $word) {
        if ($word === $target) {
            $indices[] = $index;
        }
    }

    // Build natural language output
    $count = count($indices);
    if ($count == 0) {
        echo "OUTPUT = No matches found\n";
    } elseif ($count == 1) {
        echo "OUTPUT = INDEX {$indices[0]} // [" . implode(",", $indices) . "]\n";
    } else {
        $last = array_pop($indices);
        $output = "OUTPUT = INDEX " . implode(" and INDEX ", $indices) . " and INDEX $last";
        echo "$output // [" . implode(",", array_merge($indices, [$last])) . "]\n";
    }
}

// Example usage
$words = ["I", "TWO", "FORTY", "THREE", "JEN", "TWO", "tWo", "Two"];
$target = "TWO";

findTargetIndices($words, $target);
?>
