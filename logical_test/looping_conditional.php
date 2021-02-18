<?php 
echo "<b>Looping Conditional : </b> <br>";
for ($i=1; $i <=50 ; $i++) { 
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo "FooBar".'<br>';
		continue;
	}
	if ($i % 3 == 0) {
		echo "Foo".'<br>';
		continue;
	}
	if ($i % 5 == 0) {
		echo "Bar".'<br>';
		continue;
	}
	else{
		echo $i.'<br>';
	}
}
 ?>