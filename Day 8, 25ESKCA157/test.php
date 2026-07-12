<?php
echo "Hi", "World", "I", "Am <br>";
print "Hi". "World <br>";
print("Hi");
$age = 18;
if($age>=18){
    print("Adult");
}else{
    print("Teenager");
}

echo "<br>";

//(condition)? If True : If False
($age>=18)? print("Adult") : print("Teenager");  //ternary operatpor

if(print("true <br>")){
    print("false <br>");
}
?>