<?php
$arr="endofthenightshowthem";
$count=0;
$find="e";
for ($i= 0; $i < strlen($arr);$i++){
    if ($arr[$i]==$find){
        $count++;
    }
}
echo "Times of e: ".$count."<br>";

$result= substr_count($arr,"h");
echo "Times of h : ".$result;