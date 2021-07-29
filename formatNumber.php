<?php
$salaries=[3500,4200.97,5000.436,40000];
foreach ($salaries as $index => $salary) {
    if(is_float($salary)==1)
    {
       $salaries[$index]= round($salary);
        
    }
   number_format($salaries[$index],2);
}
echo "<pre>";
print_r($salaries);
echo "</pre>";
echo (round(4200.96));