<?php
$instructors = [
    'kareem fouad' => [
        'job' => 'backend developer',
        'track' => 'php',
    ],
    'ahmed bahnasy' => [
        'job' => 'frontend developer',
        'track' => 'angular',
    ],
    'ahmed nasr' => [
        'job' => 'backend developer',
        'track' => '.net',
    ],
];
foreach ($instructors as $index => $instructor) {
    foreach ($instructors[$index] as $key => $value) { 
        echo "<ul>
    <li>$index
     <ul>
     <li> $key : $value</li> 
     </ul>
    </li>
    </ul>";
    
    }
}