<?php
$num=123456;
$num=(int)$num/10;
$count=0;
while ($num!=0) {
    $num=(int)$num/10;
    $count++;
}
echo $count;