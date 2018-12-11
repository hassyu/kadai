<pre>
<?php
	include ('header.html');
	include ('list.html');
	$fname="count.txt";
	$fp=fopen($fname,"r+");
	fscanf($fp,"%d",$n);
	if(date('Ymd')!=date('Ymd',filemtime($fname))){
		$n=0;
	}
	$n++;
	echo "あなたは、本日";
	for($i = 0; $i < strlen($n); $i++){
		$x=substr($n,$i,1);
		echo "<img src='sozai/$x.png'>";
	}
	echo "人目の訪問者です。";	
	rewind($fp);
	fprintf($fp,"%d",$n);
	fclose($fp);
	$today=date('y/m/d h:i:s');
	echo $today;
?>
