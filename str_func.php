<?php

$str = "Hello";
$str1 = "****Hello from Avadh &&&&";
$str2 = "****Good Morning ***";
$str3 = "Simple String";

// 1. chr()   Ascii code to character
echo chr(97),'<br>';

// 2. ord()  character to Ascii
echo ord('A'),'<br>';

// 3. strtolower()  convert string to lowercase  
echo strtolower($str),'<br>';

// 4. strtoupper()  convert string to uppercase  
echo strtoupper($str),'<br>';

// 5. ucfirst()  convert first letter capital 
echo ucfirst($str),'<br>';

// 6. ucwords()  convert first letter capital of each words 
echo ucwords($str1),'<br>';

// 7. strlen() give length about given string  
echo strlen($str1),'<br>';

// 8. ltrim() remove the blank space or specified character from beginning (left side) 
echo ltrim($str1,'*'),'<br>';

// 9. rtrim() remove the blank space or specified character from ending (right side) 
echo rtrim($str1,'&'),'<br>';

// 10. trim() remove the blank space or specified character (right side & left side) 
echo trim($str2,'*',),'<br>';

// 11. substr() which returns specifid string by given starting index to ending index 
echo substr($str3,0,5),'<br>';

// 12. strcmp() compare two string 
echo strcmp($str1,$str2),'<br>';

// 13. strcasecmp() compare two string (not case sensitive) 
echo strcasecmp($str2,$str1),'<br>';

// 14. strncasecmp() compare two string with each other using fixed length given.
echo strnatcasecmp($str,$str1),'<br>';

// 15. strpos() find the position of first occurrence of the character in the string..
echo strpos("Avadh","a"),'<br>';

// 16. strrpos() find the position of first occurrence of the character in the string (case sensitive)
echo strrpos("AVADH","A"),'<br>';

// 17. strstr()  get string from specified character to end of string.
echo strstr("AVADH","V"),'<br>';

// 18. strrev() reverse string
echo strrev("AVADH"),'<br>';

// 19. str_replace()  find specified character and replace it with given character.
echo str_replace("a","Y","Avadh Narola"),'<br>';

// 20. str_ireplace()  find specified character and replace it with given character (Not case sensitive).
echo str_ireplace("a","Y","Avadh Narola"),'<br>';

// 21. Strrchr() retrieve the string from last occurrence of given character.
echo strrchr("Nana NAni","A"),'<br>';

// 22. strval() retrieve the string from last occurrence of given character.
$digit=12345; 
echo strval($digit),'<br>';
var_dump($digit);















?>