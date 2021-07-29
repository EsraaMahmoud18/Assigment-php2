<?php
$names=["esraa","hager","farida","hasnaa"];
foreach ($names as $index => $name) {
    $max= strlen($names[0]);
    if(strlen($name)>$max)
    {
        $max=strlen($name);
        $longestname=$name;
    }
}
echo  "the longest name is ".$longestname;