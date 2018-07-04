<!doctype html>
 <html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Welcome to OpenShift</title></head>

<body>
<!--
  <h1>Hello World!</h1>
  <?php
    echo "<h1>First PHP line</h1>";
    echo "Second PHP line<BR>";
    $x=12;
    $y=5;
    $z=$x+$y;
    echo $z;
    echo $z;
    echo $z;
   ?>
-->
<!--  <h1>HTML experiment</h1>   -->



<?php
#  This is a comment.
// This is also a comment.
/*
-  A good online PHP manual/tutorial site:  http://php.net/manual/en/function.substr.php  ,  http://php.net/manual/en/language.operators.bitwise.php  ,
                                            http://php.net/manual/en/language.operators.string.php  .
-  In PHP, right shifts have copies of the sign bit shifted in on the left, meaning the sign of an operand is preserved. Unlike Javascript, PHP does not
   have the >>> bit-shift operator.
-  Some PHP string operations:   $substring = substr($string, start_index, length)  .   $str_length = strlen($string)  .
*/
/* PHP has a total of eight data types to use to construct variables -
     1. Integers - are whole numbers, without a decimal point, like 4195.
     2. Doubles - are floating-point numbers, like 3.14159 or 49.1 .
     3. Booleans - have only two possible values either true or false.
     4. NULL - is a special type that only has one value: NULL.
     5. Strings - are sequences of characters, like 'PHP supports string operations.'
     6. Arrays - are named and indexed collections of other values.
     7. Objects - are instances of programmer-defined classes, which can package up both other kinds of values and functions that are specific to the class.
     8. Resources - are special variables that hold references to resources external to PHP (such as database connections).
   The first five are simple types, and the next two (arrays and objects) are compound - the compound types can package up other arbitrary values of
   arbitrary type, whereas the simple types cannot.            */
/* There are a few ways to convert a string to a number in PHP:
   1.  Cast the strings to numeric primitive data types:
           $num = (int) "10";
           $num = (double) "10.12";   // same as (float) "10.12";
   2.  Use intval() or floatval():
           $num = intval("10");
           $num = floatval("10.1");
       echo intval(42);                      // 42
       echo intval(4.2);                     // 4
       echo intval('42');                    // 42
       echo intval('+42');                   // 42
       echo intval('-42');                   // -42
       echo intval(042);                     // 34 (octal number starts with zero)
       echo intval('042');                   // 42
       echo intval(1e10);                    // 1410065408
       echo intval('1e10');                  // 1
       echo intval(0x1A);                    // 26 (hex number starts with 0x)
       echo intval(42000000);                // 42000000
       echo intval(420000000000000000000);   // 0
       echo intval('420000000000000000000'); // 2147483647
       echo intval(42, 8);                   // 42
       echo intval('42', 8);                 // 34
       echo intval(array());                 // 0
       echo intval(array('foo', 'bar'));     // 1                      */

print "An example with single line comments";
print "This spans
multiple lines. The newlines will be
output as well";
print "Hello 2<BR>";
print "Hello 1\n";
print "2    3     4";
print "<h1>Hello 3</h1>";
    $x=12;
    $y=5.12;
    $z=$x+$y;
print "Variable z is $z     ,     $x      $y ; $x+$y ";
print("Variable z is $z     ,     $x      $y ; $x+$y <br>");
echo "Variable z is $z     ,     $x      $y ; $x+$y <br>";
echo 'Variable z is $z     ,     $x      $y ; $x+$y <br>';
    $x = "String in double-quote!\"\'~\$ $ $ $var $a $x $y $z";
    $y = 'String in single-quote!\"\'~\$ $ $ $var $a $x $y $z';
print "$x<BR>";
echo "$y<BR>";

    $x=0xfffffffff;
    $x=$x+1;
    $y=0xffffffffff;
echo "$x $y<br>";
    $x='0xf';
    $y=$x+1;           // doesn't work.
echo "$x $y<br>";
    $x="0xf";
    $y=$x*1;           // doesn't work.
    $x=$x|0;           // doesn't work.
echo "$x $y<br>";
    $x='0xf';   $y=(int)$x;     echo "$x $y<br>";
    $x='15';    $y=(int)$x;     echo "$x $y<br>";
    $x="0xf";   $y=intval($x);  echo "$x $y<br>";
    $x="15";    $y=intval($x);  echo "$x $y<br>";
    $x="0xf";   settype($x, "integer");    echo "$x <br>";
    $x="15";    settype($x, "integer");    echo "$x <br>";
    

phpinfo();
?>

</body>
</html>
