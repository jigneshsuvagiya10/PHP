<p>$a = '1';  
$b = &$a;   
$b = "2$b";</p> 

 <p> $a='1'  ->  a value is '1' in string.</p>

 <p> $b=&$a  ->  $a and $b now have the same memory address.If you assign anything to $a, or to $b, they will both echo the same value, 
 because they store data in the same place in memory.
 $a='1' and $b='1'</p>

 <p>$b="2$b"->  now add 2 before value of $b
 $b="2('1')"='21'</p>
 
 <p> $a and $b have same value ,then $a='21'</p>