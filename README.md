Task 1

You need to write a function for validating user posts.
In messages, the user is allowed to use only the following HTML tags and attributes:

<a href="" title=""> </a>
<code> </code>
<i> </i>
<strike> </strike>
<strong> </strong>

There should be a check for tag closure, proper nesting of tags, and XHTML validity.
The validation logic must be implemented using regular expressions in PHP, without using built-in DOM functions or similar libraries.
The function should return true if the message is valid and false otherwise.

Task 2

There is a string $text in UTF-8 encoding and an array of words $array_of_words (in the same encoding).
It is necessary to highlight the first occurrences of each word using square brackets (e.g., replace "Vasya" with "[Vasya]"), while ignoring case (highlighting both "vasya" and "vaSya").
Only whole words should be highlighted, not substrings. 
For example, if the string is "Mama washed the frame" and the array contains "ama" and "frame", the result should be "Mama washed [the frame]" and not "M[ama] washed [the frame]".

The solution should be implemented in the function highlightWords($text, $array_of_words).
