<?php

$firstname = $_REQUEST['firstname'];

$cars = [
    
    ['id' => '1',
    'model' => 'Kia',
    'country' => 'Korea',],
    ['id' => '2',
    'model' => 'Hyundai',
    'country' => 'Korea',],
    ['id' => '3',
    'model' => 'Bmw',
    'country' => 'Germany',],
    ['id' => '4',
    'model' => 'Mercedes',
    'country' => 'Germany',],
    ['id' => '5',
    'model' => 'Wolkswagen',
    'country' => 'Germany',],
    ['id' => '6',
    'model' => 'Renault',
    'country' => 'France',],
    ['id' => '7',
    'model' => 'Chevrolet',
    'country' => 'USA',],
    ['id' => '8',
    'model' => 'Bentley',
    'country' => 'Great Britain',],
    [
        'parent_id' => 'Korea',
        'flag' => 'korea_flag',
        ],
        [
        'parent_id' => 'Germany',
        'flag' => 'germany_flag',
        ],
        [
        'parent_id' => 'France',
        'flag' => 'france_flag',
                ],
        [
        'parent_id' => 'USA',
        'flag' => 'Usa_flag',
                    ],
        [
        'parent_id' => 'USA',
        'flag' => 'Usa_flag',
            ],
];


    function Cars($cars, $firstname = 0){
        foreach($cars as $key => $value){
            if($firstname == $value['model']){
                return $value['country'];
                Cars($cars, $value['id']);
            }
        };
       
    };
    function Country($cars, $firstname = 0){
        foreach($cars as $key => $value){
            if($firstname == $value['parent_id']){
                return $value['flag'];
                Country($cars, $value['id']);
            }
        };
       
    };
print_r(Cars($cars));
print_r(Country($cars));
    
?>