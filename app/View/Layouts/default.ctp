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
/* The smallest building blocks of PHP are the indivisible tokens,
   such as numbers (3.14159), strings ("Hello"), variables ($two), constants (TRUE), and the special words that make up the syntax of PHP itself
   like if, else, while, for and so forth.            */
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
    $x = "String in double-quote!\"\'~\$ $ $ $var $a $x $y $z";
    $y = 'String in single-quote!\"\'~\$ $ $ $var $a $x $y $z';
print "$x<BR>";
echo "$y<BR>";

phpinfo();
?>

</body>
</html>
