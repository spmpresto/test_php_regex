<?php
function highlightWords($text, $array_of_words) {
    // we go through each word from the array in a loop
    foreach ($array_of_words as $word) {
        // Use preg_replace_callback to replace only the first occurrence

        $text = preg_replace_callback(
            '/\b' . preg_quote($word, '/') . '\b/ui', // Regular expression with word boundaries, ignoring case and UTF-8 encoding
            function ($matches) {
                return '[' . $matches[0] . ']'; // Add brackets [] around the found word
            },
            $text,
            1 // replace only up to the first occurrence!
        );
    }

    return $text;
}


$text = "Мама мыла раму, а Вася помогал маме с мытьем.";
$array_of_words = ["мама", "раму", "вася"];

$result = highlightWords($text, $array_of_words);
echo $result;
