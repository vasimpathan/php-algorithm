<?php 
//Caesar Cipher

// Sample Input

// 	11
// 	middle-Outz
// 	2

// Sample Output

// okffng-Qwvb
// Explanation

// Original alphabet:      abcdefghijklmnopqrstuvwxyz
// Alphabet rotated +2:    cdefghijklmnopqrstuvwxyzab

// m -> o
// i -> k
// d -> f
// d -> f
// l -> n
// e -> g
// -    -
// O -> Q
// u -> w
// t -> v
// z -> b
function caesarCipher($text, $shift) {
    $result = '';
    $shift = $shift % 26; // Ensure the shift is within the bounds of the alphabet

    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];

        // Check if character is an uppercase letter
        if (ctype_upper($char)) {
            $result .= chr((ord($char) + $shift - 65) % 26 + 65);
        }
        // Check if character is a lowercase letter
        elseif (ctype_lower($char)) {
            $result .= chr((ord($char) + $shift - 97) % 26 + 97);
        }
        // If it's neither, just add the character as is (for spaces, punctuation, etc.)
        else {
            $result .= $char;
        }
    }

    return $result;
}

// Example usage:
$plaintext = "middle-Outz";
$shift = 2;
$ciphertext = caesarCipher($plaintext, $shift);
echo "Plaintext: " . $plaintext . "<br>";
echo "Ciphertext: " . $ciphertext . "<br>";


?>