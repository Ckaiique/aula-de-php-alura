<?php

$contasCorrentes =[
    12345678910 => [
        'titular'=>'Vinicius',
        'saldo'=> 1000
    ], 
    12345678911 =>[
        'titular'=>'maria',
        'saldo'=> 10000
    ],
    12345678912 => [
        'titular'=>'Alberto',
         'saldo' => 300
    ]
];

foreach($contasCorrentes as $cpf => $conta ){
    echo $conta['titular'] . PHP_EOL;
    echo $cpf . PHP_EOL;
    echo $conta['saldo'] . PHP_EOL;
}