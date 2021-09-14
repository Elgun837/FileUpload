<?php require_once "header.php";?>

<div class="form-page">
<?php

$firstname = $_REQUEST['firstname'];

$cars = [
    
    ['id' => '1',
    'model' => 'Kia',
    'country' => 'Korea',
    ],
    ['id' => '2',
    'model' => 'Hyundai',
    'country' => 'Korea',
    ],
    ['id' => '3',
    'model' => 'Bmw',
    'country' => 'Germany',
    ],
    ['id' => '4',
    'model' => 'Mercedes',
    'country' => 'Germany',
    ],
    ['id' => '5',
    'model' => 'Wolkswagen',
    'country' => 'Germany',
    ],
    ['id' => '6',
    'model' => 'Renault',
    'country' => 'France',
    ],
    ['id' => '7',
    'model' => 'Chevrolet',
    'country' => 'USA',
    ],
    ['id' => '8',
    'model' => 'Bentley',
    'country' => 'Great Britain',
    ],
];
$flag = [
    [
        'parent_id' => 'Korea',
           'flag' => "<img class='flag' src='./korea.png'>",
       ],
       [
       'parent_id' => 'Germany',
       'flag' => "<img class='flag' src='./germany.png'>",
       ],
       [
       'parent_id' => 'France',
       'flag' => "<img class='flag' src='./france.jpg'>",
       ],
       [
       'parent_id' => 'USA',
       'flag' => "<img class='flag' src='./usa.png'>",
       ],
       [
       'parent_id' => 'Great Britain',
       'flag' => "<img class='flag' src='./britain.png'>",
       ],
    ];
$Country = function($cars, $firstname = 0){
    foreach($cars as $key => $value){
        if($firstname == $value['model']){
            return $value['country'];
        }
    }
};

$flagPrin = function($data, $Country){
    foreach($data as $key => $value){
        if($Country == $value['parent_id']){
            echo "<h3 class='heading'>". $Country ."</h3>"; 
            return $value['flag'];
        }
    }
};

print_r($flagPrin($flag,$Country($cars, $firstname)));
    
?>
</div>