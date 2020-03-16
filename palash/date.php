<?php 

	//echo date('dmys');
	$str = 'aaa , bb ,cc ,';
	$str2 = '+91 aaa aaa , +91 bb bb , +91 cc cc ,';
	echo $str2;
	str_replace('  ', '', $str2);
	echo '<br>'.$str2;
	/*$a = explode(',', $str);
	echo count($a).'<br>';
	$b = explode(',', $str2);
	echo count($b).'<br>';
	echo $str2.'<br>';
	print_r($b);
	str_replace(' ', '', $b);
	print_r($b);
	echo '<br><br><br><br>';
	
	echo '<br><br><br><br>';

	for ($i = 0; $i < count($b)-1; $i++) {
		//echo $i.'  '.$b[$i].'<br>';
		/*$after = explode(' ', $b[$i]);
		echo $after[2].'<br>';
	}*/
	// 
 ?>