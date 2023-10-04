<?php



function removeDuplicates($inputString) {
    $outputString = "";
    $characters = [];

    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];
        if (!isset($characters[$char])) {
            $outputString .= $char;
            $characters[$char] = true;
        }
    }

    return $outputString;
}

// Example usage
// $inputString = "programming";
$inputString="apples";
$outputString = removeDuplicates($inputString);
echo "Original String: " . $inputString . "\n";
echo "removing duplicates: " . $outputString;





?>