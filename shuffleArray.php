<?php
$colors=["red","green","yellow","black"];
$arraylen= count($colors)-1;
foreach ($colors as $index => $color) {
    $randcolor=rand(0,$arraylen);//
    if($index<$randcolor){
        $temp=$colors[$randcolor];//yellow
        $colors[$randcolor]= $colors[$randcolor-$index];
        $colors[$randcolor-$index]=$temp;
    }
    if($index>$randcolor){
        $temp=$colors[$randcolor]; 
        $colors[$randcolor]= $colors[$index-$randcolor];
        $colors[$randcolor-$index]=$temp;
         }
    if($index<0)
    {
        continue; 
    }
}
echo "<pre>";
print_r($colors);
echo "</pre>";