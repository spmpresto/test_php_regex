<?php
function validatePost($allowedTags, $message) {


    // preparing a regular expression for tags with attributes
    $tagPattern = [];
    foreach ($allowedTags as $tag => $attributes) {
        $attrPattern = '';
        foreach ($attributes as $attr) {
            $attrPattern .= "(?:\s+$attr=\"[^\"]*\")?";
        }
        $tagPattern[] = "<$tag$attrPattern\s*>(.*?)<\/$tag>";
    }

    // Allowed tags and their attributes
    $validTagsRegex = '/^(' . implode('|', $tagPattern) . ')*$/s';

    // Check for closing tags and correct nesting
    if (!preg_match_all('/<[^>]+>/', $message, $matches)) {
        return false; // Если нет тегов, просто возвращаем false
    }

    // If there are no tags, just return false
    $tagStack = [];
    foreach ($matches[0] as $tag) {
        // Check opening tags
        if (preg_match('/^<([a-z]+)(?:\s+[^>]*)?>$/i', $tag, $tagMatch)) {
            $tagStack[] = $tagMatch[1]; // Add to the stack
        } elseif (preg_match('/^<\/([a-z]+)>$/i', $tag, $tagMatch)) {
            // Check closing tags
            if (empty($tagStack) || array_pop($tagStack) !== $tagMatch[1]) {
                return false; // If the set is empty or an invalid tag is closed
            }
        }
    }

    // If the set is not empty, then some tags were not closed
    if (!empty($tagStack)) {
        return false;
    }

    // Check attributes and XHTML structure correctness
    return preg_match($validTagsRegex, $message) === 1;
}



// regular expression for allowed tags and attributes
$allowedTags = [
    'a' => ['href', 'title'],
    'code' => [],
    'i' => [],
    'strike' => [],
    'strong' => []
];

$message_correct = '<a href="https://example.com" title="example">Click here</a><code>code snippet</code>';
var_dump(validatePost($allowedTags,$message_correct)); // Returns true if the message is valid



$message_incorrect = '<a href="https://example.com" class="foo" title="example">Click here</a><code>code snippet</code>';
var_dump(validatePost($allowedTags,$message_incorrect)); // Returns false if the message is valid
