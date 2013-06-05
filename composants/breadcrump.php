<?php
$def = "index";
$dPath = $_SERVER['PHP_SELF'];
var_dump($dPath);
$dChunks = explode("/", $dPath);
var_dump($dChunks);

echo('<a class="dynNav" href="'.$dPath.'">Home</a><span class="dynNav"> > </span>');
for($i=1; $i<count($dChunks); $i++ ){
	echo('<a class="dynNav" href="/');
	for($j=1; $j<=$i; $j++ ){
		echo($dChunks[$j]);
		if($j!=count($dChunks)-1){ echo("/");}
	}
	
	if($i==count($dChunks)-1){
		$prChunks = explode(".", $dChunks[$i]);
		if ($prChunks[0] == $def) $prChunks[0] = "";
		$prChunks[0] = $prChunks[0] . "</a>";
	}
	else $prChunks[0]=$dChunks[$i] . '</a><span class="dynNav"> > </span>';
	echo('">');
	echo(str_replace("_" , " " , $prChunks[0]));
} 

?>

<ul class="breadcrumb">
<li><a href="#">Home</a> <span class="divider">/</span></li>
<li><a href="#">Consultation</a> <span class="divider">/</span></li>
<li><a href="#">L3 App</a> <span class="divider">/</span></li>
<li class="active">Semestre 1</li>
</ul>