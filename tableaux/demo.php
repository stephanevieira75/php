<?php
// Variables
    $animals = [
        // Chat
        [
            'genre' => 'chat',
            'age' => 5
        ],
        // Chien
        [
            'genre' => 'chien',
            'age' => 10
        ],
        // Poisson
        [
            'genre' => 'poisson',   
            'age' => 1
        ],
        // Dragon
        [
            'genre' => 'dragon',
            'age' => 500
        ]
    ];

// Instruction
    echo 'Le ' . $animals[0]['genre'] . ' a ' . $animals[0]['age'] . " ans.\n";
    echo 'Le ' . $animals[1]['genre'] . ' a ' . $animals[1]['age'] . " ans.\n";
    echo 'Le ' . $animals[2]['genre'] . ' a ' . $animals[2]['age'] . " ans.\n";
    echo 'Le ' . $animals[3]['genre'] . ' a ' . $animals[3]['age'] . " ans.\n";
    
?>