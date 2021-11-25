<?php

$conta=[
    'titular'=> ' Vinicius ',
    'saldo'=> 1000
];
$conta2 =[
    'titular'=> 'maria',
    'saldo'=> 10000
];
$conta3 =[
    'titular'=>'Alberto',
     'saldo' => 300
];

$contasCorrentes =[$conta, $conta2, $conta3];

for ($i = 0; $i , count($contasCorrentes); $i++);{
    echo $contasCorrentes[$i]['titular'] . PHP_EOL; 
}
