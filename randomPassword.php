<?php
$length=8;
$str="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ[]{}+-#$%^&*!'";
$pass=substr(str_shuffle($str),0,$length);
echo $pass;