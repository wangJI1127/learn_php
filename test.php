<?php
echo '--------------------------------';
$s = "pwwkew";

$max_len = 0;
$count = 0;
$start = 0;
for($i=0;$i<strlen($s);$i++){
    if (false!==$loca = strpos(substr($s,$start,$count),$s{$i})){
        $start = $i - ($count - $loca - 1);
        $count = $count - $loca;

    }else{
        $count++;
        $max_len = $count > $max_len ? $count:$max_len;
    }
}
echo $max_len;


