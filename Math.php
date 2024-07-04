<?php

echo "<h2>Math Function</h2>";
$num = -45.90;
// 1. abs() - value ne + ma aape
echo "abs() : ",abs($num),'<br>';

// 2. ceil()  nearest integer larger value
echo "ceil() : ",ceil(-4.89),'<br>';

// 3. floor()  nearest integer small value
echo "floor() : ",floor(9.56),'<br>';

// 4. round()  round the floating value as given precision.
echo "round() : ",round(9.51489,3),'<br>';

// 5. fmod() give modulos between two num
echo "fmod() : ",fmod(9.5,4.3),'<br>';

// 6. min() give minimum number
echo "min() : ",min(array(1,5,73,4,6,8)),'<br>';

// 7. max() give maximum number
echo "max() : ",max(array(1,5,73,4,6,8)),'<br>';

// 8. pow() find the power of base value.
echo "pow() : ",pow(5,3),'<br>';

// 9. sqrt() 
echo "sqrt() : ",sqrt(625),'<br>';

// 10. rand() generate random number
echo "rand() : ",rand(1,100),'<br>';

// 11. bindec() converts the number from binary to decimal 
echo "bindec() : ",bindec(10101),'<br>';

// 12. octdec() converts the number from octal to decimal 
echo "octdec() : ",octdec(123),'<br>';

// 13. hexdec() converts the number from hexadecimal to decimal 
echo "hexdec() : ",hexdec("A728"),'<br>';

// 14. decbin() converts the number from decimal TO binary 
echo "decbin() : ",decbin(25),'<br>';

// 15. decoct() converts the number from decimal TO octal 
echo "decoct() : ",decoct(25),'<br>';

// 16. dechex() converts the number from decimal TO hexadecimal 
echo "dechex() : ",dechex(167),'<br>';

?>