<?php

return [
    'subjects' => [
        'title' => 'Subjects'
    ],

    'units' => [
        'parent' => 'subjects',
        'title' => 'Units'
    ],
    'topics' => [
        'title' => 'Topics',
        'parent' => 'units',
    ],

    'questions' => [
        'title' => 'Questions & Answers',
        'parent' => 'topics'
    ],
];
