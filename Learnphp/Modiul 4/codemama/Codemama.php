<?php



//==================================================
// problem 1
//==================================================

// function removeDuplicates($inputStr){
//     $outputStr="";
//     $characters=[];
//     $inputLen=strlen($inputStr);
//     for($i=0;$i<$inputLen;$i++){
//         $char=$inputStr[$i];
//         if(!isset($characters[$char])){
//             $outputStr.=$char;
//             $characters[$char]=true;
//         }


//     }
//     return $outputStr;
// }
// $inputStr="apples";
// // $inputStr=    fgets(STDIN);    //console.log output 
// $outputStr=removeDuplicates($inputStr);

// echo $outputStr;



//==================================================

// problem 2
//==================================================

// Function to check if two strings are anagrams
// function areAnagrams($stringA, $stringB) {
//     // Count the occurrences of characters in both strings
//     $countA = array_count_values(str_split($stringA));
//     $countB = array_count_values(str_split($stringB));

//     // Compare the character counts
//     return $countA == $countB;
// }

// Read input strings
// $stringA = trim(fgets(STDIN));
// $stringB = trim(fgets(STDIN));
// $s="abcd";
// $t="abdc";

// // Check if the strings are anagrams and print the result
// if (areAnagrams($s,$t)) {
//     echo "YES";
// } else {
//     echo "NO";
// }

  



    // # Write your PHP code from here
    // function getAnagrams($word) {
    //     $word = str_split($word);
    //     sort($word);
    //     $word = implode('', $word);
    //     $anagrams = [];
    //     // $dictionary = file_get_contents('wordlist.txt'); // A file containing a list of words, one word per line
    //     // $dictionary = explode("\n", $dictionary);
        
    //     foreach ($dictionary as $dictWord) {
    //         $dictWordSorted = str_split($dictWord);
    //         sort($dictWordSorted);
    //         $dictWordSorted = implode('', $dictWordSorted);
            
    //         if ($dictWordSorted === $word) {
    //             $anagrams[] = $dictWord;
    //         }
    //     }
        
    //     return $anagrams;
    // }
    
    // $word = "listen";
    // $anagrams = getAnagrams($word);
    
    // echo "Anagrams of $word: " . implode(', ', $anagrams);


//==============
// function areAnagrams($word1, $word2) {
//     return count_chars($word1, 1) == count_chars($word2, 1);
// }

// $word1 = "listen";
// $word2 = "silent";

// if (areAnagrams($word1, $word2)) {
//     echo "YES";
// } else {
// echo "NO";
// }

//==================================================

// problem 2
//==================================================



// Read input string
$inputString = trim(fgets(STDIN));

// Function to remove duplicates from a string
function removeDuplicates($str) {
    $result = '';
    $seen = array();

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (!isset($seen[$char])) {
            $result .= $char;
            $seen[$char] = true;
        }
    }

    return $result;
}

// Call the function and print the result
$outputString = removeDuplicates($inputString);
echo $outputString . "\n";











//==================================================

// problem 2
//==================================================

















//==================================================

// problem 2
//==================================================





















//==================================================

// problem 2
//==================================================



















//==================================================

// problem 2
//==================================================

























//==================================================

// problem 2
//==================================================

























//==================================================

// problem 2
//==================================================
























//==================================================

// problem 2
//==================================================

























//==================================================

// problem 2
//==================================================



















?>