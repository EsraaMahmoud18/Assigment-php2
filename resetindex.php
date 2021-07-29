<?php
$nums=[1,2,3,4,5,6];
unset($nums[3]);
 $nums=array_values($nums);
echo "<pre>";
print_r($nums);
echo "</pre>";