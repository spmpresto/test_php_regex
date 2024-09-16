Task 1:

You need to write a function for validating user posts.
In messages, the user is allowed to use only the following HTML tags and attributes:
<code>
<a href="" title=""> </a>
<code> </code>
<i> </i>
<strike> </strike>
<strong> </strong>
</code>
There should be a check for tag closure, proper nesting of tags, and XHTML validity.
The validation logic must be implemented using regular expressions in PHP, without using built-in DOM functions or similar libraries.
The function should return true if the message is valid and false otherwise.

Task 2:

There is a string $text in UTF-8 encoding and an array of words $array_of_words (in the same encoding).
It is necessary to highlight the first occurrences of each word using square brackets (e.g., replace "Vasya" with "[Vasya]"), while ignoring case (highlighting both "vasya" and "vaSya").
Only whole words should be highlighted, not substrings. 
For example, if the string is "Mama washed the frame" and the array contains "ama" and "frame", the result should be "Mama washed [the frame]" and not "M[ama] washed [the frame]".

The solution should be implemented in the function highlightWords($text, $array_of_words).



------------------------------


Задание 1:

Необходимо написать функцию для валидации постов юзера. 
Пользователь в сообщениях может использовать только следующие HTML теги и только с такими атрибутами:

<a href="" title=""> </a>
<code> </code>
<i> </i>
<strike> </strike>
<strong> </strong>


Должна быть проверка на закрытие тегов и корректную вложенность тегов, а также на валидность XHTML.
Логика проверки должна быть реализована с помощью регулярных выражений на PHP, нельзя использовать встроенные функции DOM и подобные.
Функция возвращает true, если сообщение валидно, и false в обратном случае.

Задание 2:

Есть строка $text в UTF-8 кодировке и массив слов $array_of_words (в той же самой кодировке). 
Необходимо выделить первые вхождения каждого из слов с помощью квадратных скобок (Вася заменить на [Вася]), при этом не учитывать регистр (выделять как вася так и ваСя). 
Выделить нужно только целые слова, а не подслова. Например, есть строка «Мама мыла раму» и массив «ама», «раму». В результате должно получиться «Мама мыла [раму]», а не «М[ама] мыла [раму]». 
Решением должна быть реализация функции function highlightWords($text, $array_of_words).
